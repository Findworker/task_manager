<?php

try {

$pdo = new PDO('mysql:host=127.0.0.1;dbname=task_manager','root','12345');

} catch(PDOexception $e) {

	die('Couldn\'t connect');

}