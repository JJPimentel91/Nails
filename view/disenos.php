<?php
require_once('header.php');
require_once('model/productController.php');
?>

<body>
  <div class="container-fluid" id="nopad">

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

  <div class="jumbotron text-center" id="mainpicdiv6">
	  <h3 id="title41">Diseños</h3>
	</div>

	<!--<div class="container text-center" id="textdiv">
	  <h1 id="title12">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"</h1>
	  <button id="conoce1">Conoce Mas</button>
	</div>-->

	<div class="container-fluid" id="box1">
	  <div class="col-sm-4">
	  	<h1 id="title14">DISEÑOS</h1>
	  	<img src="product-images/nails4.jpeg" id="box2">
	  </div>
	  <div class="col-sm-8" id="disenos">
	    <p id="text3" style="padding: 70px 50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	  </div>
	</div>  


  <div class="container-fluid" id="nopad">
    <div class="col-sm-2">


    </div><!--end of nav-->
    <div class="col-sm-10">

      <div>
        <?php if(isset($_SESSION['message'])) { ?><div class="Message"><?php echo $_SESSION['message']; ?>
      </div>

      <?php } ?>

       <!--can enter title here-->

      <?php
      $productModel = new productController();
  
      // $conn = $db_handle->connectDB();

      $product_array = $productModel->getPink();
      if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
      ?>

      <div class="product-item">
        <form id="frmCart">
          <!--<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/?productID=<?php echo $product_array[$key]["code"]; ?>">-->

          <div class="product-image">
            <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics1" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>">
            <p class="img__description" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>"><i class="fas fa-search-plus"></i></p>
          </div>

          <!--<label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">-->

            <!--START OF MODAL-->

            <div id="<?php echo $product_array[$key]["code"]; ?>" class="modal fade" role="dialog" style="margin-left: 18%">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-body" style="margin: 2px;padding: 2px">
                    <div class="container-fluid" id="nopad">
                      <div class="col-sm-7">
                        <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics2">
                      </div>
                      <div class="col-sm-5" id="modalinfo">
                        <h4 class="modal-title"><?php echo $product_array[$key]["name"]; ?></h4>
                        <p class="prodid">ID del Producto: <?php echo $product_array[$key]["code"]; ?></p>
                        <p class="prodid"><?php echo "$".$product_array[$key]["price"]; ?></p>
                        <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button id="conoce2" href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/cart.php'; ?>">Agendar</button>
                      </div>
                    </div><!--end of container-->
                  </div>
                  <div class="modal-footer" style="margin: 0px;padding: 0px 10px 10px 10px;">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="conoce2">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--END OF MODAL-->

          <div class="product-price"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
          <!--</a>-->
          <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
          <div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
            <?php
            $in_session = "0";
            if(!empty($_SESSION["cart_item"])) {
            $session_code_array = array_keys($_SESSION["cart_item"]);
            if(in_array($product_array[$key]["code"],$session_code_array)) {
            $in_session = "1";
            }
            }
            ?>

            <input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Agendar" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
            <input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Agregado" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
          </div>
        </form>
      </div>
      <?php
      }
      }
      ?>
      </div><!--end of PINK-->

      <div>
        <?php if(isset($_SESSION['message'])) { ?><div class="Message"><?php echo $_SESSION['message']; ?>
      </div>

      <?php } ?>

       <!--can enter title here-->

      <?php
      $productModel = new productController();
  
      // $conn = $db_handle->connectDB();

      $product_array = $productModel->getBlue();
      if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
      ?>

      <div class="product-item">
        <form id="frmCart">
                    <!--<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/?productID=<?php echo $product_array[$key]["code"]; ?>">-->

          <div class="product-image">
            <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics1" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>">
            <p class="img__description" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>"><i class="fas fa-search-plus"></i></p>
          </div>

          <!--<label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">-->

            <!--START OF MODAL-->

            <div id="<?php echo $product_array[$key]["code"]; ?>" class="modal fade" role="dialog" style="margin-left: 18%">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-body" style="margin: 2px;padding: 2px">
                    <div class="container-fluid" id="nopad">
                      <div class="col-sm-7">
                        <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics2">
                      </div>
                      <div class="col-sm-5" id="modalinfo">
                        <h4 class="modal-title"><?php echo $product_array[$key]["name"]; ?></h4>
                        <p class="prodid">ID del Producto: <?php echo $product_array[$key]["code"]; ?></p>
                        <p class="prodid"><?php echo "$".$product_array[$key]["price"]; ?></p>
                        <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button id="conoce2">Agendar</button>
                      </div>
                    </div><!--end of container-->
                  </div>
                  <div class="modal-footer" style="margin: 0px;padding: 0px 10px 10px 10px;">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="conoce2">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--END OF MODAL-->
          <div class="product-price"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
          </a>
          <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
          <div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
            <?php
            $in_session = "0";
            if(!empty($_SESSION["cart_item"])) {
            $session_code_array = array_keys($_SESSION["cart_item"]);
            if(in_array($product_array[$key]["code"],$session_code_array)) {
            $in_session = "1";
            }
            }
            ?>

            <input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Agendar" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
            <input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Agregado" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
          </div>
        </form>
      </div>
      <?php
      }
      }
      ?>
      </div><!--end of BLUE-->

      <div>
        <?php if(isset($_SESSION['message'])) { ?><div class="Message"><?php echo $_SESSION['message']; ?>
      </div>

      <?php } ?>

       <!--can enter title here-->

      <?php
      $productModel = new productController();
  
      // $conn = $db_handle->connectDB();

      $product_array = $productModel->getGreen();
      if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
      ?>

      <div class="product-item">
        <form id="frmCart">
                    <!--<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/?productID=<?php echo $product_array[$key]["code"]; ?>">-->

          <div class="product-image">
            <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics1" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>">
            <p class="img__description" data-toggle="modal" data-target="#<?php echo $product_array[$key]["code"]; ?>"><i class="fas fa-search-plus"></i></p>
          </div>

          <!--<label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">-->

            <!--START OF MODAL-->

            <div id="<?php echo $product_array[$key]["code"]; ?>" class="modal fade" role="dialog" style="margin-left: 18%">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-body" style="margin: 2px;padding: 2px">
                    <div class="container-fluid" id="nopad">
                      <div class="col-sm-7">
                        <img src="<?php echo $product_array[$key]["image"]; ?>" id="pics2">
                      </div>
                      <div class="col-sm-5" id="modalinfo">
                        <h4 class="modal-title"><?php echo $product_array[$key]["name"]; ?></h4>
                        <p class="prodid">ID del Producto: <?php echo $product_array[$key]["code"]; ?></p>
                        <p class="prodid"><?php echo "$".$product_array[$key]["price"]; ?></p>
                        <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <button id="conoce2">Agendar</button>
                      </div>
                    </div><!--end of container-->
                  </div>
                  <div class="modal-footer" style="margin: 0px;padding: 0px 10px 10px 10px;">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="conoce2">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>

            <!--END OF MODAL-->
          <div class="product-price"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
          </a>



          <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
          <div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
            <?php
            $in_session = "0";
            if(!empty($_SESSION["cart_item"])) {
            $session_code_array = array_keys($_SESSION["cart_item"]);
            if(in_array($product_array[$key]["code"],$session_code_array)) {
            $in_session = "1";
            }
            }
            ?>

            <input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Agendar" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
            <input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Agregado" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
          </div>
        </form>
      </div>
      <?php
      }
      }
      ?>
      </div><!--end of GREEN-->
      
    </div><!--end of gallery-->
  </div>      

<script>
$(document).ready(function () {
	cartAction('','');
})
</script>
<?php
require_once('footer.php');
?>