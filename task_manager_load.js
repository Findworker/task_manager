$(document).ready(function() {

	$(".brd").fadeIn(2300);

	$("#yellow_btn").click(function() {

		var task_val = $('.input_task').val();

		$.ajax({

			url: 'task_insert.php',
			type: 'POST',
			data: {

				'task_title' : task_val

			},
			success: function(result) {

				if (result) {

					$('.list').append(function() {

						var res = '';

						res = '<ul class="tasks">' + result.task_name + '</ul>';

						return res;
					});

				}

			}

		});

	});

});

$(".brd").ready(function() {

	$(".grtns").fadeIn(5000);

});

