<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tracker</title>
		<link rel="stylesheet" href="./extensions/bootstrap.min.css">
		<link rel="stylesheet" href="./extensions/all.css">
		<style>

		.btn-col {
			width: 38px;
		}

		</style>
	</head>
	<body>

		<div class="container-fluid">
			
			<header class="row">	
				<div class="col-xs-6">
					<a href="https://www.youtube.com/VermaTechs" target="_blank">Welcome to Task Tracker!</a>
				</div>

				<div class="col-xs-6 text-right">
					Total Time: <span id="tally"></span>
				</div>
			</header>

			<div class="row">
				<form id="form-new">	
					<div class="col-xs-10">
						<input id="name" name="name" class="form-control" placeholder="Enter task name!">
					</div>
					<div class="col-xs-2 text-right">
						<button type="submit" class="btn btn-block btn-success">Start</button>
					</div>
				</form>
			</div>	

			<hr>

			<table class="table table-bordered">
				
				<thead>
					<tr>
						<th>Task</th>
						<th>Start</th>
						<th>End</th>
						<th>Time</th>
						<th colspan="2">Controls</th>
					</tr>
				</thead>

				<tbody id="log"></tbody>

			</table>
 
		</div>

		<script src="./extensions/jquery-3.3.1.min.js"></script>

		<script src="atom.tracker.js"></script>

		<script src="./extensions/bootstrap.min.js"></script>
	</body>
</html>