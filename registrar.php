<?php
	include_once "sessao.php";
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$statusCarona = $_POST['carona'];
	$senha = $_POST['password'];
	$reseta = $_POST['confirm-password'];

	
	if ($senha == $reseta) {
		$sql = "insert into usuarios (NOME, SOBRENOME, CPF, dsEMAIL, matriculaALUNO, statusCARONA, dsSenha, dsConfirmarSenha) ".
				"values ('$nome', '$sobrenome', '$cpf', '$email', '$matricula', '$statusCarona', '$senha', '$reseta')";
		$result = mysqli_query($conn, $sql);
		
		mysqli_close($conn);

		if (!result) {
			echo "<script>alert('N\u00e3o foi poss\u00edvel incluir os dados!');</script>";
		}
		else {
			echo "<script>alert('Dados inclu\u00eddos com sucesso!');</script>";
		}
	}
	else {
		echo "<script>alert('Insire senhas idênticas!');</script>";
	}

	header("Location: index.html");
?>