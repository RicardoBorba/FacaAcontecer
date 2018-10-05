<?php 	



include_once ("conexaobd.php");

if (isset($_POST['btnCadastro'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$resumo = mysqli_escape_string($connect, $_POST['resumo']);
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$autor = mysqli_escape_string($connect, $_POST['autor']);
	$tag = mysqli_escape_string($connect, $_POST['tag']);
	$email = mysqli_escape_string($connect, $_POST['email']);


	

$sql = "INSERT INTO projetos (nome_projeto, resumo_projetos, descricao_projeto, autor_projeto, email, tag)

		VALUES ('$nome', '$resumo', '$descricao', '$autor', '$email', '$tag')";
	$resultado_projetos = mysqli_query($connect, $sql);
	if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "<div class='alert alert-success' role='alert'> cadastrado com sucesso!</div> ";
        header('Location: form_cadastro - projetos.php?');
    	//header('Location: portfolio.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    	header('Location: form_cadastro - projetos.php?');

   endif;

endif; 



 ?>