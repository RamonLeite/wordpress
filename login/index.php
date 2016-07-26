<!doctype html>
<html>
<head>
	
    <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        
          
      </div><!-- /.container-fluid -->
    </nav>
    
    
    <main class="container-fluid" id="loader">
    	<br>
    	<div class="row">
          <div class="col-md-3 "></div>
          <div class="col-md-6 ">
              	<br><br>
					<h1 class="text-center">Login</h1>
                    <div class="input-group center-block">
                    <input type="text" id="email_login" class="form-control" placeholder="Usuário" autofocus>
                    </div>
                    <br><br><br>
                    <div class="input-group center-block">
                    <input type="password" id="senha_login" class="form-control" placeholder="Senha">
                    </div>
                    <br><br><br><br>
                    <button  id="Logar" class="btn btn-lg btn-primary btn-block">Entrar</button>
					<button  id="Home" class="btn btn-lg btn-primary btn-block">Voltar</button>					
          </div>
		  <div class="col-md-3 "></div>
                
        </div>
        <br><br><br>
    </main>
   	
    <br><br><br><br>  
	
    <footer class="mainfooter navbar-default navbar-fixed-bottom">
    	<section>
        	<p class="text-center footertext col-md-12"> ELR-SI™ Todos os direitos reservados. </p>
        </section>    
    </footer>
	
	<script src="js/jquery.js"></script>
    <script src="js/jquerymask.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>

</body>
</html>