<?php
require_once('header.php');
?>

<body>
  <div class="container-fluid" id="nopad">

	<nav class="navbar navbar" id="navbar">
  	  <div class="container-fluid">
    	<div class="navbar-header">
      	  <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/"/" id="brand1"><b>Delicious</b></a>
    	</div>
    	<ul class="nav navbar-nav">
      	  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/"/">Pagina Principal</a></li>
      	  <li><a href="#">Nosotras</a></li>
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

    <div class="jumbotron text-center" id="mainpicdiv5">
	  <h3 id="title41">Nosotras</h3>
	</div>

	<!--<div class="container text-center" id="textdiv">
	  <h1 id="title12">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</h1>
	  <button id="conoce1">Conoce Mas</button>
	</div>-->

	<div class="container-fluid" id="box1">
	  <div class="col-sm-4">
	  	<h1 id="title14">NOSOTRAS</h1>
	  	<img src="product-images/nails3.jpeg" id="box2">
	  	<p id="text3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua</p>
	  </div>
	  <div class="col-sm-8">
	    <h1 id="title14">ACERCA DE NOSOTRAS</h1>
	    <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    <h1 id="title14">¿PORQUE ELEGIRNOS?</h1>
	    <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> </p>
	  </div>
	</div>

		  <div class="container-fluid" id="quedicen">
		    <h1 id="title6" style="text-align: center;">¿Que dicen de nosotras?</h1>
		    <div class="row" id="row2">
			  <div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5500">
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>	
				    </div>
				    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
				    <div class="active item">
                      <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
				  </div>
				</div>
			  </div>	
			</div>
		  </div>

		  <div class="container-fluid" id="email1">
			<h1 id="title6">¿Quieres recibir nuestras ofertas?</h1>
			<p id="text3">¡Déjanos tu correo!</p>
			  <div class="form-area">
			    <form role="form">
          		  <br style="clear:both">
		  		  <div class="form-group">
		    	    <input type="text" class="form-control" id="email" name="correo" placeholder="Correo Electronico" required>
		  	  	  </div>
            	  <input type="submit" id="submit" value="Suscribe" class="btn btn-primary pull-left">
        		</form>
      		  </div>
		  </div>

        

  <div class="container-fluid" id="footer3">
    <div class="col-sm-4" id="nopad">
      <h1 id="title10">Sam´s Store</h1>
      <p id="icon-footer">Nosotros <br>
  	  Bolsas<br>
  	  Zapatos<br></p>
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