<?php
	// conexão
	include_once "conexao.php";

	$conn = mysqli_connect($localhost, $user, $password, $banco);

	if (!$conn)
	{
		echo  "<script>alert('Não foi possível conectar ao Banco de Dados!');</script>";
		header('Location: logout.php');
	}			

	// abre sessão
	session_start();
	if ((!isset($_SESSION["email"])) || (!isset($_SESSION["password"])))
	{

		header("Location: login.php");
	}
	else
	{
		$email = $_SESSION["email"];
		$senha = $_SESSION["password"];
		$nome = $_SESSION['nome'];
		$id = $_SESSION['id'];
	}
?>