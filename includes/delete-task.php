<?php 
	$task = strip_tags($_POST['id']);
	include('connect.php');
	$mysqli = new mysqli('localhost','root','root','tasks');
	if ($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")) {
		
	}
?>