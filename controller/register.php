<?php

include_once("config.php");

if (isset($_POST['add'])) {
	//verifica se existem as rowns na nossa tabela
	$accountEmail = mysqli_real_escape_string($mysqli, $_POST['accountEmail']);
	$accountPassword = mysqli_real_escape_string($mysqli, $_POST['accountPassword']);

	// verificando se deixamos algo em branco
	if (empty($accountEmail) || empty($accountPassword)) {
		//bla bla bla.... verifica se deixamos algo em branco

		if (empty($accountEmail)) {
			echo "<font color='red'>nao deixe em branco</font><br/>";
		}

		if (empty($accountPassword)) {
			echo "<font color='red'>nao deixe em branco</font><br/>";
		}
	} else {

		if (filter_var($accountEmail, FILTER_VALIDATE_EMAIL)) {
			$user = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM account WHERE accountEmail='$accountEmail'"));

			if ($accountEmail == $user['accountEmail']) {
				echo 'usuario já existe';
			} else {
				$result = mysqli_query($mysqli, "INSERT INTO account(accountEmail,accountPassword) VALUES('$accountEmail',( SELECT PASSWORD('$accountPassword') ))");
				echo 'Usuario cadastrado com sucesso!';
			}
			header("Location: /views/index.php");
		} else {
			header("Location: /views/error.php");
		}


		//redireciona para a index
		
		//echo  $result;
	}
}
