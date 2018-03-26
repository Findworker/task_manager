<?php

try {

$pdo = new PDO('mysql:host=127.0.0.1;dbname=task_manager','root','');

} catch(PDOexception $e) {

	die('Couldn\'t connect');

}

$query = '
		
		SELECT * FROM tasks;

';

$statement = $pdo->prepare($query);

$statement->execute();

$results = $statement->fetchAll();

require 'index.view.php';

require 'task_insert.php';

require 'task_delete.php';
