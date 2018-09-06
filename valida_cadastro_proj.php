<?php 	



include_once ("conexaobd.php");

if (isset($_POST['btnCadastro'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$resumo = mysqli_escape_string($connect, $_POST['resumo']);
	$descricao = mysqli_escape_string($connect, $_POST['descricao']);
	$autor = mysqli_escape_string($connect, $_POST['autor']);
	$trelo = mysqli_escape_string($connect, $_POST['trelo']);
	$email = mysqli_escape_string($connect, $_POST['email']);


	

$sql = "INSERT INTO projetos (nome_projeto, resumo_projetos, descricao_projeto, autor_projeto, email, trelo)

		VALUES ('$nome', '$resumo', '$descricao', '$autor', '$email', '$trelo')";
$resultado_projetos = mysql_query($connect, $sql);
	if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "<div class='alert alert-success' role='alert'> cadastrado com sucesso!</div> ";
        header('Location: valida_cadastro_proj.php?');
    	//header('Location: portfolio.php?');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
    	header('Location: valida_cadastro_proj.php?');

   endif;

endif; 



 ?>