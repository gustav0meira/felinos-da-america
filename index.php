<?php 

	require "php/cdn.php";
	if (!isset($_GET['msg'])) {
		$msg = 'Insira o usuário único informado para prosseguir ao sistema.';
	} else{
		$msg = $_GET['msg'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | SGC</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<meta name="theme-color" content="#3FBFF3">
</head>
<body>
	<div class="alignCenter">
		<form method="POST" action="php/functions/verifyLogin.php">
			<center>
				<img class="logo" src="assets/logoWhite.png">
				<p style="<?php if (isset($_GET['msg'])) {echo 'color: #FFFFFF !important;';} ?>" class="msg"><?php echo $msg ?></p>
			</center>
			<label class="input">usuário:</label>
			<input required type="text" name="usuario"><br>
			<button>entrar</button>
		</form>
	</div>
	<p class="copy">Criado com muito ódio por Gustavo™</p>
</body>
</html>