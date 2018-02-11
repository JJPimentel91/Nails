<?php
require_once('header.php');
require_once('model/productController.php');
?>

<body>
  <div class="container-fluid" id="nopad">

	<nav class="navbar navbar" id="navbar">
  	  <div class="container-fluid">
    	<ul class="nav navbar-nav">
      	  <li><a href="#">Pagina Principal</a></li>
      	  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>">Nosotras</a></li>
      	  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/disenos.php'; ?>">Diseños</a></li>
          <li><a href="#">Agenda tu Cita</a></li>
    	</ul>
  	  </div>
	</nav>

    <div class="jumbotron" id="mainpicdiv1">
	  <h2 id="title3">Delicious</h2>
	  <h3 id="title4">Los mejores productos</h3>
	</div>

	<div class="container text-center" id="textdiv">
	  <h1 id="title12">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</h1>
	  <a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>"><button id="conoce1">Conoce Mas</button></a>
	</div>

	<div class="container-fluid" id="box1">
	  <div class="col-sm-4">
	  	<h1 id="title14">NOSOTRAS</h1>
	  	<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>">
	  	  <img src="product-images/nails3.jpeg" id="box2">
	  	</a>
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>"><button id="conoce1">Conoce Mas</button></a>
	  </div>
	  <div class="col-sm-4">
	  	<h1 id="title14">DISEÑOS</h1>
	  	<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/disenos.php'; ?>">
	  	  <img src="product-images/nails4.jpeg" id="box2">
	  	</a>
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/disenos.php'; ?>"><button id="conoce1">Ver Diseños</button></a>
	  </div>
	  <div class="col-sm-4">
	  	<h1 id="title14">AGENDA</h1>
	  	<img src="product-images/nails5.jpg" id="box2">
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<button id="conoce1">Agendar Cita</button>
	  </div>
	</div>

<script>
$(document).ready(function () {
	cartAction('','');
})
</script>
<?php
require_once('footer.php');
?>