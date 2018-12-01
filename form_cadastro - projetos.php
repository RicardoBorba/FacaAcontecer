
<?php
include_once ("conexaobd.php");
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
      <a class="navbar-brand" href="index.php">Faça Acontecer</a> </nav>


<!--class="form-horizontal"-->



    <body style="background-image:url(img/backfinal.jpg);">


  <conteiner class="card " style=" padding: 20px; width:  855px;">

<form method="POST" action="valida_cadastro_proj.php">
    <h1 class="text-center"> Cadastro de Projeto  </h1>


      <?php
          if (isset($_SESSION ['mensagem'])):
            echo($_SESSION['mensagem']);
          endif;
          session_unset();
        ?>
        <div class="form-group">
  <div class="form-row">
    <div class="col">
      <label class="control-label col-sm-3" for="text">Projeto:</label>
      <input type="text" class="form-control "  id= "nome" name="nome" placeholder="Digite o Nome do Projeto">
    </div>
    <div class="col">
       <label class="control-label col-sm-3" for="text">Autor:</label>
      <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite o nome do Autor">
    </div>
    <div class="form-group">
      <div class="form-row">
      <div class="col">
       <label class="control-label col-sm-3" for="text">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail de contato">
    </div>
    <div class="col">
       <label class="control-label col-sm-3" for="text">Categoria</label>
          <form action="" method="post" enctype="multipart/form-data">
           <select name="tag">
             <?php
             $consulta = "select tag from tags";
             $resultado = mysqli_query($connect, $consulta);
             while($row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
             echo "<option value='".$row['tag']."'>".$row['tag']."</option>";
             }
             ?>
           </select>
       </form>
    </div>
  </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col">
    <label for="text">Resumo do Projeto</label>
    <textarea class="form-control col-sm-15" id="resumo" name="resumo" placeholder="Breve resumo do Projeto" rows="3"></textarea>
  </div>
   <div class="col">
    <label for="text">Descrição do Projeto</label>
    <textarea class="form-control col-sm-15" id="descricao" name="descricao" placeholder="Descreva seu projeto" rows="5"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Imagem do Projeto</label>
    <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1">
  </div>

 <input class="btn btn-success col-sm-4" type="submit" name="btnCadastro" value="Concluir">

</form>





  </div>
</div>



		<div class="voltar"  >
		<a class="navbar-brand2" href="portfolio.php">Voltar</a> </nav>
		</div>


  <!--
  <div class="form-group  ">
    <div class="form-row">
    <div class="col">
    <label class="control-label col-sm-3" for="email">Nome:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nome" name = "nome" placeholder="Digite o nome do Projeto">
     </div>
     </div>
     <div class="col">
    <label class="control-label col-sm-3" for="Autor">Autor do Projeto:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Autor" name="Autor" placeholder="Digite seu Nome">
    </div>
    </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Resumo de Projeto</label>
    <textarea class="form-control col-sm-4" id="Resumo" rows="3"></textarea>
  </div>



    <div class=" col-sm-offset-2 col-sm-4">
      <button type="submit" name="btn-cadastrar" class=" btn btn-lg btn-primary btn-block">Cadastrar</button>
    </div>
  </div>
</conteiner>
</form>

</body>
-->
