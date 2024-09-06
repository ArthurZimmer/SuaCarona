<?php
	// conexão
	session_start();

	include_once "conexao.php";

	$conn = mysqli_connect($localhost, $user, $password, $banco);

	if (!$conn) {
		echo  "<script>alert('Nao foi possivel conectar ao Banco de Dados. Usuario ou Senha invalidos!');</script>";
		header('Location: index.html');
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM usuarios ".
			"WHERE (dsEMAIL='$email') AND (dsSenha='$password')";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	
	if ($row > 0) {
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			$id = $row[0];
			$nome = $row[1];
//			$foto = $row[4];
		}

		// cria sessão
		$_SESSION['id'] = $id;
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
	 // $_SESSION['foto'] = $foto;

		header('Location: index.php');

	}
	else {
		echo  "<script>alert('Usuario ou Senha invalidos!');</script>";
		
		// volta para a tela de login
		header('Location: loginerrado.php');
	}
?>