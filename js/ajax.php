<?php include('../includes/connection.php'); ?>
<?php include('../includes/functions.php'); ?>
<?php 
	$subject_id = $_GET['subject_id'];
	$page_count = get_all_pages($subject_id)->rowCount();
	for ($count = 1; $count <= $page_count+1; $count++){
		echo '<option value="'.$count.'">'.$count.'</option>';
	}
?>