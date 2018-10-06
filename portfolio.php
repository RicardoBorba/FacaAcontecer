<?php 

include_once ("conexaobd.php");
$result_projetos = "SELECT * FROM projetos";
$resultado_projetos = mysqli_query ($connect, $result_projetos);
$row_projetos = mysqli_fetch_assoc($resultado_projetos);

 ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faça Acontecer - Projetos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container">
        <a class="navbar-brand "   href="#">Faça Acontecer</a>
        
       
            <a class="nav-item">
             
             <a  class="btn btn-success col-sm-4 "  href="form_cadastro - projetos.php">Cadastrar projetos</a>
              
             <a class="btn btn-dark  col-sm-3"  href="sair.php"> Sair</a>
             
            </a>

             
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <section class="jumbotron text-center" style="background-image: url(img/start_up.jpg);">
        <div class="container">
          <br>
          <br>
		  <br>
		  <br>
		  
		  <h1 class="jumbotron-heading" style="color: #ffff ">Tire suas  ideias  do papel</h1>
          <h2 class="lead text-muted"></h2>
          <p>
           <!-- <a href="form_cadastro - projetos.php" class="btn btn-primary my-2">cadastre seus Projetos</a> -->		  
          </p>
		  
		 
				<form action="" method="post" enctype="multipart/form-data">
					<span></span>
						<select name="Categoria">
							<option value="" selected="selected">Selecione uma categoria</option>
							
						</select>	
				</form>
		  
        </div>
      </section>
    <!-- Page Content -->
    
    <div class="container"  >  


     
     <!-- <h1 class="mt-4 mb-3 text-center">Projetos</h1> -->

       
        <div class="row">
       <?php while ($row_projetos = mysqli_fetch_assoc($resultado_projetos)) { ?> 
      
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src= img/projeto.png >


            <div class="card-body caption text-center" >
              <h4 class="card-title">
                 <a href="perfil_projeto.php ?id_projetos=<?php echo $row_projetos['id_projetos']; ?>" ><?php echo $row_projetos ['nome_projeto'];?> </a>
              </h4>              
              <p class="card-text"> </p> <?php echo $row_projetos ['resumo_projetos']; ?>
              <p></p>
              <p> <a href="perfil_projeto.php ?id_projetos=<?php echo $row_projetos['id_projetos']; ?>"  class="btn btn-success" role= "butom" > Ver mais </a></p>
            </div>
          </div>
      </div>
            <?php } ?>
         
      </div>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>

     </div>

     </div>
    <!-- /.container -->

    <!-- Footer -->
   

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
