<?php
require_once('header.php');
?>

<body> 

  <nav class="navbar navbar" id="navbar">
  	<div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/"/">Pagina Principal</a></li>
      	<li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/nosotras.php'; ?>">Nosotras</a></li>
      	<li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/disenos.php'; ?>">Diseños</a></li>
        <li><a href="#">Agenda tu Cita</a></li>
      </ul>
  	</div>
  </nav>

  <div class="jumbotron text-center" id="mainpicdiv4">
  	<h3 id="title41">Agenda tu Cita</h3>
  </div>

  <div class="clear-float"></div>
  <div id="shopping-cart">
    <div class="container-fluid" id="nopad">
      <div class="col-sm-8">
      	<p>address</p>
      </div>
      <div class="col-sm-4">
      	<div id="cart-item"></div>
      </div>
    </div>
    <a id="btnEmpty" class="cart-action" onClick="cartAction('empty','');">Empty Cart</a>
    <a id="btnEmpty" class="cart-action" onClick="cartAction('emptyRedirect','');"/>CheckOut</a>
  </div>
<script>
$(document).ready(function () {
	cartAction('','');
})
</script>


</body>
</HTML>