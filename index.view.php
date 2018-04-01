<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task Manager</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="task_manager_load.js"></script>
</head>
<body>
	<h1 class="grtns">
		
		Welcome to your task manager!

	</h1>
		<div class ='brd'>
			<div class='list'>
				<?php foreach ($results as $key => $value) : ?>
						
					<ul class='tasks'>
						
						<?= $value['tasks'];?>
					
					</ul>

					<input type="submit" class="buttons" value="Delete Task" id="red_btn" onclick="parent.location='index.php?id=<?php echo $value['id'];?>'">

				<?php endforeach; ?>
			</div>
			
			<input type="text" name="task" class="input_task">
			
			<input type="submit" value="Add Task" class="buttons" style="font-size: 12px" id="yellow_btn">
		</div>
</body>
</html>