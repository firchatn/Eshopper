<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +216 52 968 357</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> yassine.jomaa@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
				
					</div>
					<?php
					session_start(); 					
					if($id=mysql_connect('localhost','root','')){
					if($id_db=mysql_select_db('projectweb')){
					$v = $_SESSION['user'];
					$result=mysql_query("SELECT count(*) as total from pannier where idclient = '$v';");
					$data=mysql_fetch_assoc($result);
					
					}
					}
						
					?>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> <?php echo $data['total']; ?> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Produit</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
					//session_start(); 					
					if($id=mysql_connect('localhost','root','')){
					if($id_db=mysql_select_db('projectweb')){
					$v = $_SESSION['user'];
					$result=mysql_query("SELECT * from pannier where idclient = '$v';");
					//$data=mysql_fetch_assoc($result);
					
					
					
					
					while($ligne=mysql_fetch_row($result)){
							$ref=$ligne[0];
							$idclient=$ligne[1];
							$quantite=$ligne[3];
							$prix=$ligne[2];
							$tt = $quantite*$prix;
							
					
					echo("<tr>
							<td class='cart_product'>
								<a href=''><img src='images/home/logo.png' alt=''></a>
							</td>
							<td class='cart_description'>
								<h4><a href=''>$ref</a></h4>
								<p></p>
							</td>
							<td class='cart_price'>
								<p>$prix</p>
							</td>
							<td class='cart_quantity'>
								<div class='cart_quantity_button'>
									<input class='cart_quantity_input' type='text' name='quantity' value='$quantite' autocomplete='off' size='2'>
								</div>
							</td>
							<td class='cart_total'>
								<p class='cart_total_price'>$tt</p>
							</td>
							<td class='cart_delete'>
								<a class='cart_quantity_delete' href=''><i class='fa fa-times'></i></a>
							</td>
						</tr>");

}
					}
					}
					?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>