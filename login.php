
<?php session_start(); ?>

<!DOCTYPE html>


<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Faça Acontecer</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>
 
 
  <body  class="text-center " style="background-image: url(img/backfinal.jpg);">

     
 
     
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="home2.php">Faça Acontecer</a> </nav>

      <conteiner class="card " style="padding: 10px; width:  400px;">   

      <h1 class="h3 mb-3 font-weight-normal"> Login</h1>

       <h6 class="h6 mb-3 font-weight-normal">Efetue o Login para acessar o sistema</h6>
      <br>
      <br>

     
  <?php 

if(!empty($erros)):
        foreach ($erros as $erro):
          echo $erro;
        endforeach;
      endif;
  ?>    
       
      
     <form  method="POST" action="valida_login">
     
      <label name ='usuario' class="sr-only">Usuário</label>
      <div class="col-sm-12">
           <input type="text" class="form-control" name="usuario" placeholder="Usuário"><br>
      </div>
     
      <label name = 'senha' class="sr-only">Senha</label>
      <div class="col-sm-12">
          <input type="password" class="form-control" name="senha" placeholder="Senha"><br><br>
      </div>
      <form class="form-inline">
      <input class="btn btn-success" type="submit" name="btnLogin" value="Acessar">
      
      <a  class="btn btn-success"  href="form_cadastro.php">cadastre-se</a>
      
       <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>


</form>

</conteiner>
 </div>
</span>  
  </body>
</html>