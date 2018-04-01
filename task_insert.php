<?php

<<<<<<< HEAD
require 'connection.php';

//Process the array and insert in database

$task_title = $_POST['task_title'];

$query = '

	INSERT INTO 
		tasks (tasks, status) 
	VALUES 
		("' .$task_title. '", 0);

';

$st = $pdo->prepare($query);

$st->execute();

//Selecting from db

$query = '

	SELECT 
		* 
	FROM 
		tasks 
	ORDER BY 
		id DESC
	LIMIT 1;

';


$st= $pdo->prepare($query);

$st->execute();

$results = $st->fetchAll();

$out = [];

$out['task_name'] = $results[0]['tasks'];

$out['id'] = $results[0]['id'];

header('Content-Type: text/json; charset=utf-8');

echo json_encode($out);
=======
if (!empty($_POST['task'])) {

	$task_title = $_POST['task'];

	$query = '
	
		INSERT INTO tasks (task_name, status) VALUES ("' .$task_title. '", 0);

	';

	$st = $pdo->prepare($query);

	$st->execute();

	header('location:index.php');

}

>>>>>>> 3ccf2e663bbfe9123568d1b9076c21500f0f6b4a
