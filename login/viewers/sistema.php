<?php session_start(); 
	//var_dump($_SESSION);
	if(empty($_SESSION)){
		?>
        	<script>
				document.location.href = '..';
			</script>
        <?php	
	}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="col-md-3" id=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right">        
          <li><a href="#" id="gerenciar_admin">Admin</a></li>                            
          <li><a href="#" id="getout"><i class="fa fa-sign-out" aria-hidden="true"></i> SAIR </a></li>
        </ul>     
      </div>
    </nav>
    
    <!-- Paginas carregadas aqui -->
    <main class="container-fluid" id="loader">
		<div class="col-md-3"></div>
		<div class="col-md-6" style="padding-top:250px;">
			<h1 class="text-center">Conteudo super secreto!</h1>
		</div>
		<div class="col-md-3"></div>
	</main>
   	<!-- Paginas carregadas aqui -->
    
	
    <footer class="mainfooter navbar-default navbar-fixed-bottom">
    	<section>
        	<p class="text-center footertext col-md-12"> ELR-SI™ Todos os direitos reservados. </p>
        </section>    
    </footer>
	
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/npm.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>