<?php 
	
	session_start();
	require "../php/sql.php";
	require "../php/vars.php";
	require "../php/cdn.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/painel.css">
</head>
<body>
	<div class="content">
		<div class="row">
			<div class="col-6">
				<img class="logo align" src="https://img.freepik.com/icones-gratis/pata_318-530213.jpg?w=2000">
			</div>
			<div style="text-align: right;" class="col-6">
				<i class="fa-solid fa-bars align"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h1 class="goodmorning">bom dia, <?php echo $_SESSION['nome']; ?> 🌄</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="module">
					
				</div>
			</div>
			<div class="col-6">
				<div class="module">
					
				</div>
			</div>
			<div class="col-12">
				<div class="module">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>