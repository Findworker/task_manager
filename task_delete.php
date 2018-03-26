<?php

if (!empty($_GET['id'])) {

	$id = $_GET['id'];

	$query = '

		DELETE FROM tasks WHERE id = ' .$id. ';

	';

	$st = $pdo->prepare($query);

	$st->execute();

	header('location:index.php');

}