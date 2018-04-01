<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task Manager</title>
<<<<<<< HEAD
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="task_manager_load.js"></script>
=======
	<style>
		
		.list {

			width: 90%;	height: 40%; /* Размеры */
			background: white; /* Цвет фона */
			border-radius: 6px; /* Радиус скругления */
			text-align: center;
			margin: 11px;
			font-size: 18px;
			box-shadow: 0 0 3px rgba(0,0,0,0.5);


		}

		.tasks {

            margin: 5px;
            margin-right: 5px;
            font-size: 17px;
            text-align: left;
        }
		
		.brd {

			width: 18%; height: 100%;
			background: #FFFFFF	;
			border-radius: 10px;
			border:3px solid #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
			margin: 0 auto;
			padding: 7px;
			padding-left:inherit;


		}


        .input_task {

			margin-left: 25px;
			margin-bottom: 10px;
			margin-right: 20px;
			margin-top: 10px;
			width: 200px;
			height: 30px;

       	}

       	.grtns {

			text-align: center;

       	}

       	.buttons {

			color: black;
			background-color: #f1c40f;
			border-color: #f1c40f;
			display: inline-block;
			line-height: 20px;
			cursor: pointer;
			text-align: center;
			border-radius: 5px;

       	}

       	.red_btn {

			font-size: 12px;
			margin: 2px;
			margin-left: 10px;
			color: black;
			background-color: #ff4d4d;
			display: inline-block;
			line-height: 20px;
			cursor: pointer;
			text-align: center;
			border-radius: 5px;

       	}


	</style>
>>>>>>> 3ccf2e663bbfe9123568d1b9076c21500f0f6b4a
</head>
<body>
	<h1 class="grtns">
		
		Welcome to your task manager!

	</h1>
<<<<<<< HEAD
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
=======
	<p>
		<div class ='brd'>
			<?php foreach ($results as $key => $value) : ?>


				
					<div class='list'>
						
						<li class='tasks'>
							
							<?= $value['task_name'];?>
						
						</li>

					</div>

					<input type="submit" class="red_btn" value="Delete Task" onclick="parent.location='index.php?id=<?php echo $value['id'];?>'">

			<?php endforeach; ?>

			<form action="index.php" method="post">
				
				<input type="text" name="task" class="input_task">
				
				<input type="submit" value="Add Task" class="buttons" style="font-size: 12px">

			</form>
		</div>
	</p>
>>>>>>> 3ccf2e663bbfe9123568d1b9076c21500f0f6b4a
</body>
</html>