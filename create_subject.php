<?php require('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php require_once('includes/form_functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
<?php 
	$name = $_POST['name'];
	$position = $_POST['position'];
	$visible =  $_POST['visible'];
	$content =  $_POST['content'];

	$errors = [];
	$field_names = [$name, $position, $visible, $content];
	$errors = check_errors($field_names);

	if(!empty($errors)){
		header("Location: new_subject.php");
		exit;
	}

	$insert_query = "INSERT INTO subjects 
						(name, position, visible, content) 
			 			VALUES 
						('{$name}', {$position}, {$visible}, '{$content}') ";
//	echo $inset_query;
	$result = $connection->query($insert_query);
	if($result){
		header("Location: new_subject.php");
		exit;
	}else{
		echo "Создание нового раздела не удалось: ";
	}
?>
