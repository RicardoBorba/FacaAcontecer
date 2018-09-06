<?php 

// validação de usuario e senha 
require_once("conexaobd.php");
session_start();

 if (isset($_POST['btnLogin'])):
  $erros = array();
  $usuario = mysqli_escape_string($connect, $_POST['usuario']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if(empty($usuario) or empty($senha)):
    $erros[] = " <div class='alert alert-danger' role='alert'> O campo Login ou Senha precisa ser preenchido!</div> ";
        else: 
       $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
       $resultado= mysqli_query($connect, $sql);

  if (mysqli_num_rows($resultado) > 0 ):
    $senha = md5($senha);
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) == 1 ):
        $dados = mysqli_fetch_array($resultado);
        $_SESSION ['logado'] = true;
        $_SESSION ['id_usuario'] = $dados['id'];
        header ('Location: portfolio.php');
    else:
        
          header("Location: login.php");
       $erros[] = " <div class='alert alert-danger' role='alert'> usuario e senha  não conferem!</div> ";


    endif;
       else:    
    header("Location: login.php");
      $erros[] = " <div class='alert alert-danger' role='alert'>  Usuario inexistente!</div>";
  endif;
endif;
endif;

 ?>