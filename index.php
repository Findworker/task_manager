<?php

require "connection.php";

$query = '
		
		SELECT * FROM tasks;

';

$statement = $pdo->prepare($query);

$statement->execute();

$results = $statement->fetchAll();

require 'index.view.php';

require 'task_delete.php';
