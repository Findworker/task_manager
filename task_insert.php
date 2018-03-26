<?php

if (!empty($_POST['task'])) {

	$task_title = $_POST['task'];

	$query = '
	
		INSERT INTO tasks (task_name, status) VALUES ("' .$task_title. '", 0);

	';

	$st = $pdo->prepare($query);

	$st->execute();

	header('location:index.php');

}

