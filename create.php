<?php 
session_start();
require_once 'conexaobd.php';


if (isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
	$usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $senha = md5($senha);

    $sql = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES ('$nome', '$email','$usuario', '$senha')" ;
    

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "<div class='alert alert-success' role='alert'> cadastrado com sucesso!</div> ";
    	header('Location: form_cadastro.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    	header('Location: form_cadastro.php?');

   endif;

endif; 

 ?>