 <?php
 session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>CocktailSociety</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <img class="img-responsive" src="banner.png" alt="Banner" style="width:100%"> 
</head>
<body>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="javascript:void(0)"><span class="glyphicon glyphicon-glass"></span> CocktailSociety</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="classics.php">Classics</a></li>
      <li><a href="comunity.php">Comunity</a></li>
	  
	<?php
	if (@$_SESSION['active'] == '1'){
		echo '<li><a href="submit.php">Submit your cocktail</a></li>';	     
	}
	?>
	  <li><a href="about.php">About Us</a></li>
    </ul>
	
	<?php
	$Login=('<ul class="nav navbar-nav navbar-right">
      <li><a href="#"data-toggle="modal" data-target="#registermodal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>');
	
	@$nome = $_SESSION['name'];
	@$apelido = $_SESSION['surname'];
	if (@$_SESSION['active'] == '1'){
		echo '<ul class="nav navbar-nav navbar-right"><li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;'.$nome.' '.$apelido.'</a></li></ul>';
	     
	}else if (@$_SESSION['active']!= '1'){
		echo $Login;
	}
	?>
    
  </div>
</nav> 








  <!-- Modal de Login -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><b>Login</b></h3>
        </div>
        <div class="modal-body">
		 <form action="http://localhost/userlogin.php" method = "post">
			<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" required name="email">
			</div>
			<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" required name="password">
			</div>
	<div class="checkbox">
		<label><input type="checkbox"> Remember me</label>
	</div>
  <button type="submit" name="submit" value="Send" class="btn btn-success">Login</button>
</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
    <!-- Modal de Register -->
  <div class="modal fade" id="registermodal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title"><b>Register</b></h3>
        </div>
        <div class="modal-body">
		 <form action="sign_up2.php" method="post">
			<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
			<label for="usr">Surname:</label>
			<input type="text" class="form-control" id="surname" name="surname">
			</div>
			<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" name="password">
			</div>
  <button type="submit" class="btn btn-success">Register</button>
</form> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<br>
<div class="container">
<center><h1>O nosso projeto</h1>
<p class="text-justify">Este projeto consiste na criação de um website tendo como tema base cocktails,
 neste website teremos uma área para que os utilizadores possam consultar os 
 cocktails clássicos submetidos pela administração do site, também terá uma área 
 onde poderam encontrar cocktails da comunidade que serão submetidos pelos utilizadores, 
 também terá um criador de cocktails que os utilizadores poderão utilizar para criar os seus 
 cocktails e partilhar com a comunidade, e por ultimo terá um mini jogo com o objectivo gerir 
 um bar onde o utilizador terá de responder a pedidos de clientes de maneira a ganhar dinheiro 
 e manter o bar aberto, caso o utilizador não responda aos pedidos de maneira correta o bar fecha e acaba o jogo.</p></center>
</div>

<br>
<br>
<br>
<br>
<br>
<br>


<div class="row">
  <div class="col-6 col-md-1"> </div>
  <div class="col-6 col-md-4">
		<div class="card"> <img class=".img-thumbnail" src="http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg" alt="">
                    <div class="card-body">
                <div class="news-title">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>07/01/2018</em></small></p>
              </div>
                  </div>
  </div>
  <div class="col-6 col-md-1"> </div>
  <div class="col-6 col-md-4"> 
	<div class="card"> <img class=".img-thumbnail" src="http://grafreez.com/wp-content/temp_demos/river/img/travel1.jpg" alt="">
                    <div class="card-body">
                <div class="news-title"><a href="#">
                  <h2 class=" title-small">Minorities Suffer From Unequal Pain Treatment</h2>
                  </a></div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
              </div>
                  </div>
  </div>
  <div class="col-6 col-md-1"> </div>
</div>






</body>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; CocktailSociety 2017</p>
      </div>
    </footer>
</html> 