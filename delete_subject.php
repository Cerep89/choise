<?php include('includes/connection.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/session.php'); ?>
<?php confirm_logged_in(); ?>
<?php 
if(intval($_GET['subj'])){
	$id = $_GET['subj'];

	$delete_query = "DELETE FROM subjects WHERE id ={$id}";
	$result = $connection->query($delete_query)->rowCount();
	if($result == 1){
		echo "Раздел успешно удален";
		echo '<a href="index.php" class="btn btn-success" >Вернуться на главную</a>';
	}else{
		echo "При удалении раздела произошла ошибка";
		echo '<a href="index.php" class="btn btn-success" >Вернуться на главную</a>';
	}
}else{
	header("Location: index.php");
	exit;
}
