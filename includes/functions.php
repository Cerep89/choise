<?php 
function confirm_query($query_result){
	if(!$query_result){
		die("There is an error during query");
	}
}

function get_all_subjects($public = true){
	global $connection;
	$subjects_query = 'SELECT * FROM subjects';
	if($public){
		$subjects_query .= ' WHERE visible = 1 ';
	}
	$subjects_query .= ' ORDER by position';
	$subjects_result = $connection->query($subjects_query);
	confirm_query($subjects_result);
	return $subjects_result;
}

function get_all_pages($subject_id){
	global $connection;
	$pages_query = 'SELECT * FROM pages WHERE subject_id = '.$subject_id;
	$pages_result = $connection->query($pages_query);
	confirm_query($pages_result);
	return $pages_result;
}

function get_subject_by_id($subj_id){
	global $connection;
	$subjects_query = 'SELECT * FROM subjects WHERE id='.$subj_id;
	$subjects_result = $connection->query($subjects_query)->fetch();
	confirm_query($subjects_result);
	return $subjects_result;
}

function get_page_by_id($page_id){
	global $connection;
	$pages_query = 'SELECT * FROM pages WHERE id='.$page_id;
	$page_result = $connection->query($pages_query)->fetch();
	confirm_query($page_result);
	return $page_result;
}

function find_selected_page(){
	global $sel_page;
	global $sel_subject;
	if(isset($_GET['page'])){
		$sel_page = $_GET['page'];
		$page = get_page_by_id($_GET['page']);
		$sel_subject = $page['subject_id'];
	}elseif (isset($_GET['subj'])) {
		$sel_subject = $_GET['subj'];
		$sel_page = NULL;
	}else{
		//header("Location: index.php?subj=1");
	}
}

function navigation($sel_subject=1, $sel_page=1){
	// 2 step - make subjects query
	$public = false;
	$subjects_result = get_all_subjects($public);

    // 3 step - show subjects results
	foreach ($subjects_result as $subject) {
		echo '<li><a href="edit_subject.php?subj='
		.urlencode($subject['id']).'">'.
		$subject['name'].'</a>';

		if($sel_subject == $subject['id']){
          // 4 step - make pages query
			$pages_result = get_all_pages($subject['id']);
			echo '<ul>';
          // 5 step - show pages results
			foreach ($pages_result as $page) {
				echo '<li ';
				if($sel_page == $page['id']){
					echo ' class="selected" ';
				}
				echo '><a href="single.php?page='.urlencode($page['id']).'">'.
				$page['name'].'</a></li>';
          } // end of pages loop
          echo '</ul>';
      }
    } // end of subjects loop
    echo '</li>';
}
function public_navigation($sel_subject=1, $sel_page=1){
	$public = true;
	// 2 step - make subjects query
	$subjects_result = get_all_subjects($public);

    // 3 step - show subjects results
	foreach ($subjects_result as $subject) {
		echo '<li><a href="posts.php?subj='
		.urlencode($subject['id']).'">'.
		$subject['name'].'</a>';

		if($sel_subject == $subject['id']){
          // 4 step - make pages query
			$pages_result = get_all_pages($subject['id']);
			echo '<ul>';
          // 5 step - show pages results
			foreach ($pages_result as $page) {
				echo '<li ';
				if($sel_page == $page['id']){
					echo ' class="selected" ';
				}
				echo '><a href="article.php?page='.urlencode($page['id']).'">'.
				$page['name'].'</a></li>';
          } // end of pages loop
          echo '</ul>';
      }
    } // end of subjects loop
    echo '</li>';
}

function picture_upload(){
	$file_name = $_FILES['upload_picture']['name'];
	$file_type = $_FILES['upload_picture']['type'];
	$file_tmp_name = $_FILES['upload_picture']['tmp_name'];
	$file_size = $_FILES['upload_picture']['size'];
	$error = $_FILES['upload_picture']['error'];

	$errors = array();

	if(!empty($error)){
		$erros[] = $error;
	}

	if(empty($file_name) || empty($file_tmp_name)){
		$errors[] = "The file and location are not able";
	}

	$target_file = HOME.'/../images/'.$file_name;
	if(file_exists($target_file)){
		$errors[] = "This file $file_name already exists.";
	}

	if($file_size >= 10000000){
		$errors[] = "Filesize larger than server can accept";
	}

	if(empty($errors)){
		if(move_uploaded_file($file_tmp_name, $target_file)){
			return insert_picture($file_name, $file_type, $file_size);
		}
	}else{
		return $errors; 
	}

}

function insert_picture($file_name = NULL, $file_type = NULL, $file_size = NULL) {
	global $connection;
	$picture_query = "INSERT INTO images	
									(picture_name, picture_type, picture_size)
									VALUES 
									('{$file_name}', '{$file_type}', '{$file_size}')";
	$picture_result = $connection->query($picture_query);
	return $pic_id = $connection->lastInsertId();
}
    
?>