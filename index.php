<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--script src="js/simpleCart.min.js"> </script-->
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">	
				<input type="text" value="Pesquisar " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" id="inputSearch">
				<input type="submit" value="Pesquisar" id="btnSearch">
				<script>
					document.getElementById('btnSearch').onclick = function() {
						var cvalue = document.getElementById('inputSearch').value;
						window.location.href = "./products.php?search=3," + cvalue;
					};
				</script>	
			</div>
			<div class="header-left">		
					<ul>
						<?php
						if(isset($_COOKIE["1AMM-CV002"])){
							$dados = explode(",", $_COOKIE["1AMM-CV002"]);
							echo"
							<li id='campLogin'><a href='loged.php'>".$dados[0]."</a></li>
							<li id='campRegister'><a  href='index.php' id='clickExit'>Sair</a></li>
							<script>
								document.getElementById('clickExit').onclick = function(){
									document.cookie = '1AMM-CV002' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
									window.location.href='../index.php';
								}
							</script>
							";

						}else{
							echo"
							<li id='campLogin'><a href='login.php'>Login</a></li>
							<li id='campRegister'><a  href='register.php'>Register</a></li>
							";
						}
						?>

					</ul>
					<div class="cart box_1">
						<a href="checkout.php" id="checkoutClick">
						<h3> <div class="total">
							<span class="simpleCart_total" id="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<script type="module">
							import * as DATA from './js/dataCart';
							document.getElementById('checkoutClick').onclick = function(){
								DATA.loadCart();
								DATA.saveCartCookie();
							};
						</script>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					<li class="active grid"><a class="color8" href="index.php">Início</a></li>	
					<li><a class="color1" href="products.php">Produtos</a></li>				
					<li><a class="color6" href="contact.php">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

</div>

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
												<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>CATEGORIAS</h1>
		<div class="grid-in">

			<div class="col-md-4 grid-top">
				<a href="./products.php?search=1,Peças e Componentes Industriais" class="b-link-stripe b-animate-go  thickbox" id="cat1"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Peças e Componentes Industriais</span>	
							</h3>
						</div>
				</a>
			<p><a href="./products.php?search=1,Peças e Componentes Industriais" id="catl1">Peças e Componentes Industriais</a></p>
			</div>

			<div class="col-md-4 grid-top">
				<a href="./products.php?search=1,Condutores" class="b-link-stripe b-animate-go  thickbox" id="cat2"><img class="img-responsive" src="images/resistor.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Condutores</span>	
						</h3>
					</div>
				</a>
			<p><a href="./products.php?search=1,Condutores" id="catl2">Condutores</a></p>
			</div>

			<div class="col-md-4 grid-top">
				<a href="./products.php?search=1,Banho e Aquecimento" class="b-link-stripe b-animate-go  thickbox" id="cat3"><img class="img-responsive" src="images/resistor.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Banho e Aquecimento</span>	
						</h3>
					</div>
				</a>
			<p><a href="./products.php?search=1,Banho e Aquecimento" id="catl3">Banho e Aquecimento</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>

		<div class="grid-in">
				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Caixas e Quadros" class="b-link-stripe b-animate-go  thickbox" id="cat4"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Caixas e Quadros</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Caixas e Quadros" id="catl4">Caixas e Quadros </a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Eletrodutos e Conduletes" class="b-link-stripe b-animate-go  thickbox" id="cat5"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Eletrodutos e Conduletes</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Eletrodutos e Conduletes" id="catl5">Eletrodutos e Conduletes </a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Dispositivos de Proteção Elétrica" class="b-link-stripe b-animate-go  thickbox" id="cat6"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Dispositivos de Proteção Elétrica</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Dispositivos de Proteção Elétrica" id="catl6">Dispositivos de Proteção Elétrica </a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Ferramentas" class="b-link-stripe b-animate-go  thickbox" id="cat7"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Ferramentas</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Ferramentas" id="catl7">Ferramentas</a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Informática" class="b-link-stripe b-animate-go  thickbox" id="cat8"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Informática</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Informática" id="catl8">Informática</a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Interruptores e Tomadas" class="b-link-stripe b-animate-go  thickbox" id="cat9"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Interruptores e Tomadas</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Interruptores e Tomadas" id="catl9">Interruptores e Tomadas</a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Segurança" class="b-link-stripe b-animate-go  thickbox" id="cat10"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Segurança</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Segurança" id="catl10">Segurança</a></p>
				</div>

				<div class="col-md-4 grid-top">
					<a href="./products.php?search=1,Automação" class="b-link-stripe b-animate-go  thickbox" id="cat11"><img class="img-responsive" src="images/resistor.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span>Automação</span>	
							</h3>
						</div>
					</a>
				<p><a href="./products.php?search=1,Automação" id="catl11">Automação</a></p>
				</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	
	
	<!--div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>Lorem</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div-->
	</div>

	<!--div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="images/lo.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo3.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo4.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo5.png" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.php">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>

<!--SCRIPTS-->
<script type="module" src="./js/checkCart.js"></script>


</body>
</html>
			