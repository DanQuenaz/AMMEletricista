
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
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
					<li><a class="color2" href="index.php">Início</a></li>	
					<!--li><a class="color1" href="#">Produtos</a>
							<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Bags</a></li>
										<li><a href="products.html">Caps & Hats</a></li>
										<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										<li><a href="products.html">Jackets & Coats</a></li>
										<li><a href="products.html">Jeans</a></li>
										<li><a href="products.html">Jewellery</a></li>
										<li><a href="products.html">Jumpers & Cardigans</a></li>
										<li><a href="products.html">Leather Jackets</a></li>
										<li><a href="products.html">Long Sleeve T-Shirts</a></li>
										<li><a href="products.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							</div>
						</div>
					</li-->
					<!--li class="grid"><a class="color2" href="#">	Women</a>
							<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Accessories</a></li>
										<li><a href="products.html">Bags</a></li>
										<li><a href="products.html">Caps & Hats</a></li>
										<li><a href="products.html">Hoodies & Sweatshirts</a></li>
										<li><a href="products.html">Jackets & Coats</a></li>
										<li><a href="products.html">Jeans</a></li>
										<li><a href="products.html">Jewellery</a></li>
										<li><a href="products.html">Jumpers & Cardigans</a></li>
										<li><a href="products.html">Leather Jackets</a></li>
										<li><a href="products.html">Long Sleeve T-Shirts</a></li>
										<li><a href="products.html">Loungewear</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Shirts</a></li>
										<li><a href="products.html">Shoes, Boots & Trainers</a></li>
										<li><a href="products.html">Shorts</a></li>
										<li><a href="products.html">Suits & Blazers</a></li>
										<li><a href="products.html">Sunglasses</a></li>
										<li><a href="products.html">Sweatpants</a></li>
										<li><a href="products.html">Swimwear</a></li>
										<li><a href="products.html">Trousers & Chinos</a></li>
										<li><a href="products.html">T-Shirts</a></li>
										<li><a href="products.html">Underwear & Socks</a></li>
										<li><a href="products.html">Vests</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.html">Levis</a></li>
										<li><a href="products.html">Persol</a></li>
										<li><a href="products.html">Nike</a></li>
										<li><a href="products.html">Edwin</a></li>
										<li><a href="products.html">New Balance</a></li>
										<li><a href="products.html">Jack & Jones</a></li>
										<li><a href="products.html">Paul Smith</a></li>
										<li><a href="products.html">Ray-Ban</a></li>
										<li><a href="products.html">Wood Wood</a></li>
									</ul>	
								</div>												
							</div>
							</div>
						</div>
					</li-->
					<li><a class="color1" href="products.php">Produtos</a></li>				
					<li class="active grid"><a class="color8" href="contact.php">Contato</a></li>
				</ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
</div>

	
<!--content-->
<div class="contact">		
	<div class="container">
		<h1>Contato</h1>
		<div class="contact-form">
			<div class="col-md-8 contact-grid">
				<form>
					<label for="inputName">Seu nome</label>
					<input type="text" step="0" class="form-control" name="inputName" id="inputName" placeholder="Nome" required><br>

					<label for="inputEmail">Seu email</label>
					<input type="text" step="0" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required><br>

					<label for="inputAssunto">Assunto</label>
					<input type="text" step="0" class="form-control" name="inputAssunto" id="inputAssunto" placeholder="Assunto" required><br>
					
					<label for="inputMensagem">Mensagem</label>
					<textarea class="form-control" name="inputMensagem" id="inputMensagem" rows="3" required></textarea><br>
					
					<button type="submit" class="btn btn-warning" name="inputEnviar" id="inputEnviar">Enviar</button>
				</form>
			</div>
			<div class="col-md-4 contact-in">
				<div class="address-more">
					<h4>Endereço</h4>
					<p>AMM ELETRICISTA,</p>
					<p>Itabira,</p>
					<p>Rua x. </p>
				</div>
				<div class="address-more">
					<h4>Contatos</h4>
					<p>Tel:1115550001</p>
					<p>Fax:190-4509-494</p>
					<p>Email:<a href="mailto:contact@example.com"> contact@example.com</a></p>
				</div>	
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60120.517758909766!2d-43.263083541345424!3d-19.64728066111653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa5a113d676be4b%3A0xa1b1df8c51582d7!2sItabira%2C+MG%2C+Brasil!5e0!3m2!1spt-BR!2sin!4v1533054943571" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>	
</div>

<!--//content-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-4 amet-sed">
				<h4>MAIS INFORMAÇÕES</h4>
				<ul class="nav-bottom">
                    <li><a href="#">How to order</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="contact.php">Location</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Membership</a></li>	
                </ul>	
			</div>
			<div class="col-md-4 amet-sed ">
				<h4>FALE CONOSCO</h4>
                <p>Contrary to popular belief</p>
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
                <h4>PROMOÇÕES</h4>
                <p>Cadastre seu email para receber nossas promoções</p>
                <form>
                    <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                    <input type="submit" value="Sign up">
                </form>
            </div>
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="footer-class">
		<p >© 2018 | Desenvolvido por  <a href="http://atlasjr.com.br/" target="_blank">Atlas Soluções em Tecnologia</a> </p>
	</div>
</div>


<!--SCRIPTS-->
<script type="module" src="./js/shoppingCart.js"></script>

</body>
</html>
			