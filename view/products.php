<?php
require_once('header.php');
require_once('model/productController.php');
?>

<body>
  <div class="container-fluid" id="nopad">

	<nav class="navbar navbar" id="navbar">
  	  <div class="container-fluid">
    	<div class="navbar-header">
      	  <a class="navbar-brand" href="#" id="brand1"><b>Delicious</b></a>
    	</div>
    	<ul class="nav navbar-nav">
      	  <li><a href="#">Pagina Principal</a></li>
      	  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>">Nosotras</a></li>
      	  <li class="dropdown">
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Diseños
        	<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Casual</a></li>
              <li><a href="#">Trabajo</a></li>
              <li><a href="#">Eventos especiales</a></li>
            </ul>
      	  </li>
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
	  	<img src="product-images/nails3.jpeg" id="box2">
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>"><button id="conoce1">Conoce Mas</button></a>
	  </div>
	  <div class="col-sm-4">
	  	<h1 id="title14">DISEÑOS</h1>
	  	<img src="product-images/nails4.jpeg" id="box2">
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<button id="conoce1">Ver Diseños</button>
	  </div>
	  <div class="col-sm-4">
	  	<h1 id="title14">AGENDA</h1>
	  	<img src="product-images/nails5.jpg" id="box2">
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  	<button id="conoce1">Agenda tu Cita</button>
	  </div>
	</div>

  <div class="container-fluid" id="footer">
    <div class="col-sm-4" id="nopad">
      <h1 id="title10">Delicious</h1>
      <p id="icon-footer">Nosotras <br>
  	  Diseños<br>
  	  Agenda<br></p>
    </div>
    <div class="col-sm-4" id="nopad">
      <h1 id="title11">Contactanos</h1>
      <p id="icon-footer"><i class="glyphicon glyphicon-map-marker"></i> Queretaro<br>
  	  <i class="fas fa-phone"></i> 442 000 0000<br>
  	  <i class="fas fa-envelope"></i> contacto@samsstore.com<br></p>
  	</div>
    <div class="col-sm-4">
      <h1 id="title11" id="nopad">Aceptamos</h1>
      <p><i class="fab fa-cc-visa" id="icon-footer"></i> VISA<br>
  	  <i class="fab fa-cc-mastercard" id="icon-footer"></i> Mastercard<br>
  	  <i class="fab fa-cc-amex" id="icon-footer"></i> American Express<br>
  	  <i class="fab fa-cc-paypal" id="icon-footer"></i> Paypal<br></p>
    </div>
  </div>

  <div class="container-fluid" id="footer2">
  	<p>CP Web Solutions</p>
  </div>


<script>
$(document).ready(function () {
	cartAction('','');
})
</script>
<?php
require_once('footer.php');
?>