<<?php 

session_start();

 ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Faça Acontecer - cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cadastro.css" rel="stylesheet">


</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark " >
      <a class="navbar-brand" href="home2.php">Faça Acontecer</a> </nav>


<!--class="form-horizontal"-->
 
  <form  action="create.php" method="POST">

    <body style="background-image:url(img/backfinal.jpg);   ">


  <conteiner class="card " style=" padding: 20px; width:  600px;">   

    <h1 class="text-center"> Cadastro de usuario  </h1>
        <?php 
          if (isset($_SESSION ['mensagem'])):
            echo($_SESSION['mensagem']);
          endif;

          session_unset();
        ?>
   
  
  <div class="form-group ">
    <label class="control-label col-sm-3" for="email">Nome:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nome" name = "nome" placeholder="Nome Completo">
     </div>
    <label class="control-label col-sm-3" for="Usuario">Usuário:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu Usuário">
    </div>
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <label class="control-label col-sm-2" for="pwd">Senha:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="pwd" name="senha" placeholder="Digite sua Senha">
    </div>
    <br>
    <div class="text-center col-sm-offset-2 col-sm-4">
      <button type="submit" name="btn-cadastrar" class=" btn btn-lg btn-primary btn-block">Cadastrar</button>
    </div>
  </div>
</conteiner>
</form>

</body>





