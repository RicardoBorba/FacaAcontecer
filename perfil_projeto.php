
<?php

include_once ("conexaobd.php");
$id_projetos = $_GET ['id_projetos'];
$result_projetos = "SELECT * FROM projetos WHERE id_projetos= '$id_projetos'";
$resultado_projetos = mysqli_query($connect, $result_projetos);
$row_projetos = mysqli_fetch_assoc ($resultado_projetos);

 ?>


<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faça acontcer - Perfil de Projeto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Perfil do Projeto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form_cadastro - projetos.php">cadastrar projeto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sair.php">sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4"> 
        <?php  echo $row_projetos['nome_projeto'];?> <br>
         <small> Autor: <?php echo $row_projetos['autor_projeto']?></small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="img/projeto.png" >
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Categoria do projeto</h3>
          <p> <?php echo $row_projetos['tag'];?> </p>
		  <h3 class="my-3">Descrição do projeto</h3>
          <p> <?php echo $row_projetos['descricao_projeto'];?> </p>
          <h3 class="my-3">Email de contato</h3>
          <p> <?php echo $row_projetos['email'];?> </p>
		  <h3 class="my-3">Detalhes do projeto</h3>
		  <p> <?php echo $row_projetos['resumo_projetos'];?> </p>
        </div>  
		
		<br>
		<br>
		<br>
		<br>
		
		<div class="footer">  
		  <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>

      </div>
 
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
     
    </footer>  -->

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
