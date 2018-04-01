<?php

<<<<<<< HEAD
require "connection.php";
=======
try {

$pdo = new PDO('mysql:host=127.0.0.1;dbname=task_manager','root','');

} catch(PDOexception $e) {

	die('Couldn\'t connect');

}
>>>>>>> 3ccf2e663bbfe9123568d1b9076c21500f0f6b4a

$query = '
		
		SELECT * FROM tasks;

';

$statement = $pdo->prepare($query);

$statement->execute();

$results = $statement->fetchAll();

require 'index.view.php';

<<<<<<< HEAD
=======
require 'task_insert.php';

>>>>>>> 3ccf2e663bbfe9123568d1b9076c21500f0f6b4a
require 'task_delete.php';
