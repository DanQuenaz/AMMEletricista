<?php
require_once "./php/configDB.php"
?>

<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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
						var cname = "1AMM-AX001";
						var cvalue = "3,"+document.getElementById('inputSearch').value;
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						window.open("./products.php","_self");
					};
				</script>	
			</div>
			<div class="header-left">		
					<ul>
						<li id="campLogin"><a href="login.php">Login</a></li>
						<li id="campRegister"><a  href="register.html">Register</a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total" id="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
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
					<a href="index.html"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					<li><a class="color2" href="index.html">Início</a></li>	
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
					<li class="active grid"><a class="color8" href="products.php">Produtos</a></li>				
					<li><a class="color6" href="contact.html">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

</div>

	
<!--content-->
<!---->
<div class="product">
	<div class="container">
		<div class="col-md-3 product-price">
				
		<div class=" rsidebar span_1_of_left">
			<div class="of-left">
				<h3 class="cate">Categorias</h3>
			</div>
		<ul class="menu">
		<li class="item1"><a href="#">Peças e Componentes Industriais</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub1">Transformadores</a></li>
				<script>
					document.getElementById('sub1').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Transformadores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub2">Relés</a></li>
				<script>
					document.getElementById('sub2').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Relés";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub3">Contatores</a></li>
				<script>
					document.getElementById('sub3').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Contatores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub4">Reatores</a></li>
				<script>
					document.getElementById('sub4').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Reatores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub5">Terminais e Conectores</a></li>
				<script>
					document.getElementById('sub3').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Contatores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub6">Fontes</a></li>
				<script>
					document.getElementById('sub6').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Fontes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub7">Acessórios</a></li>
				<script>
					document.getElementById('sub7').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Acessórios";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>
		<li class="item2"><a href="#">Condutores</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub8">Isolantes</a></li>
				<script>
					document.getElementById('sub8').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Isolantes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub9">Arame</a></li>
				<script>
					document.getElementById('sub9').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Arame";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub10">Cabos</a></li>
				<script>
					document.getElementById('sub10').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Cabos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub11">Fio telefônico</a></li>
				<script>
					document.getElementById('sub11').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Fio telefônico";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub12">Acessórios para Fios e Cabos</a></li>
				<script>
					document.getElementById('sub12').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Acessórios para Fios e Cabos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>
		<li class="item3"><a href="#">Banho e Aquecimento</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub13">Pressurizador</a></li>
				<script>
					document.getElementById('sub13').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Pressurizador";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub14">Torneiras Eletrônicas</a></li>
				<script>
					document.getElementById('sub14').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Torneiras Eletrônicas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub15">Aquecedores</a></li>
				<script>
					document.getElementById('sub15').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Aquecedores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub16">Chuveiros</a></li>
				<script>
					document.getElementById('sub16').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Chuveiros";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub17">Duchas Quentes</a></li>
				<script>
					document.getElementById('sub17').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Duchas Quentes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub18">Duchas Frias</a></li>
				<script>
					document.getElementById('sub18').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Duchas Frias";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub19">Resistências</a></li>
				<script>
					document.getElementById('sub19').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Resistências";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub20">Acessórios</a></li>
				<script>
					document.getElementById('sub20').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Acessórios";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>
		<li class="item4"><a href="#">Caixas e Quadros</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub21">Caixas de Montagem</a></li>
				<script>
					document.getElementById('sub21').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Caixas de Montagem";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub22">Caixas de Telefonia</a></li>
				<script>
					document.getElementById('sub22').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Caixas de Telefonia";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub23">Caixas de Passagem PVC</a></li>
				<script>
					document.getElementById('sub23').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Caixas de Passagem PVC";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub24">Caixas de Passagem Chapa</a></li>
				<script>
					document.getElementById('sub24').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Caixas de Passagem Chapa";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub25">Quadros de Energia PVC</a></li>
				<script>
					document.getElementById('sub25').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Quadros de Energia PVC";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub26">Quadros de Energia Chapa</a></li>
				<script>
					document.getElementById('sub26').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Quadros de Energia Chapa";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub27">Acessórios para Caixas e Quadros</a></li>
				<script>
					document.getElementById('sub27').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Acessórios para Caixas e Quadros";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>
				
		<li class="item4"><a href="#">Eletrodutos e Conduletes</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub28">Luvas</a></li>
				<script>
					document.getElementById('sub28').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Luvas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub29">Abraçadeiras</a></li>
				<script>
					document.getElementById('sub29').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Abraçadeiras";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub30">Canaletas</a></li>
				<script>
					document.getElementById('sub30').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Canaletas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub31">Curvas</a></li>
				<script>
					document.getElementById('sub31').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Curvas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub32">Conduletes de Alumínio</a></li>
				<script>
					document.getElementById('sub32').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Conduletes de Alumínio";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub33">Conduletes PVC</a></li>
				<script>
					document.getElementById('sub33').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Conduletes PVC";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub34">Eletrodutos Galvanizados</a></li>
				<script>
					document.getElementById('sub34').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Eletrodutos Galvanizados";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub35">Eletrodutos de PVC</a></li>
				<script>
					document.getElementById('sub35').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Eletrodutos de PVC";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub36">Acessórios</a></li>
				<script>
					document.getElementById('sub36').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Acessórios";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Dispositivos de Proteção Elétrica</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub37">Disjuntores</a></li>
				<script>
					document.getElementById('sub37').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Disjuntores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub38">Interruptores Diferenciais</a></li>
				<script>
					document.getElementById('sub38').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Interruptores Diferenciais";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub39">Fusíveis</a></li>
				<script>
					document.getElementById('sub39').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Fusíveis";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub40">Filtro de linha</a></li>
				<script>
					document.getElementById('sub40').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Filtro de linha";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub41">Protetor DPS</a></li>
				<script>
					document.getElementById('sub41').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Protetor DPS";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Ferramentas</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub42">Detectores</a></li>
				<script>
					document.getElementById('sub42').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Detectores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub43">Medidores</a></li>
				<script>
					document.getElementById('sub43').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Medidores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Informática</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub44">Nobreak/Estabilizador</a></li>
				<script>
					document.getElementById('sub44').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Nobreak/Estabilizador";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub45">Rede</a></li>
				<script>
					document.getElementById('sub45').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Rede";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub46">Cabos</a></li>
				<script>
					document.getElementById('sub46').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Cabos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub47">Periféricos</a></li>
				<script>
					document.getElementById('sub47').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Periféricos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub48">Componentes Eletrônicos</a></li>
				<script>
					document.getElementById('sub48').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Componentes Eletrônicos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub49">Racks</a></li>
				<script>
					document.getElementById('sub49').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Racks";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub50">Filtro de Linha</a></li>
				<script>
					document.getElementById('sub50').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Filtro de Linha";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Interruptores e Tomadas</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub51">Chaves</a></li>
				<script>
					document.getElementById('sub51').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Chaves";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub52">Interruptores</a></li>
				<script>
					document.getElementById('sub52').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Interruptores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub53">Conjuntos</a></li>
				<script>
					document.getElementById('sub53').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Conjuntos";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub54">Placas e Tampas</a></li>
				<script>
					document.getElementById('sub54').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Placas e Tampas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub55">Pulsadores</a></li>
				<script>
					document.getElementById('sub55').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Pulsadores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub56">Tomadas</a></li>
				<script>
					document.getElementById('sub56').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Tomadas";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub57">Suportes</a></li>
				<script>
					document.getElementById('sub57').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Suportes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub58">Variadores</a></li>
				<script>
					document.getElementById('sub58').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Variadores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Segurança</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub59">Câmeras e Acessórios</a></li>
				<script>
					document.getElementById('sub59').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Câmeras e Acessórios";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub60">Segurança</a></li>
				<script>
					document.getElementById('sub60').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Segurança";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub61">Sirenes</a></li>
				<script>
					document.getElementById('sub61').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Sirenes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub62">Equipamento Segurança Industrial</a></li>
				<script>
					document.getElementById('sub62').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Equipamento Segurança Industrial";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub63">Alarmes</a></li>
				<script>
					document.getElementById('sub63').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Alarmes";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub64">Interfones e Acessórios</a></li>
				<script>
					document.getElementById('sub64').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Interfones e Acessórios";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

		<li class="item4"><a href="#">Automação</a>
			<ul class="cute">
				<li class="subitem1"><a href="#" id="sub65">Botoeiras</a></li>
				<script>
					document.getElementById('sub65').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Botoeiras";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem2"><a href="#" id="sub66">Botão comando</a></li>
				<script>
					document.getElementById('sub66').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Botão comando";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub67">Sensores</a></li>
				<script>
					document.getElementById('sub67').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Sensores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub68">Controladores</a></li>
				<script>
					document.getElementById('sub68').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Controladores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
				<li class="subitem3"><a href="#" id="sub69">Temporizadores</a></li>
				<script>
					document.getElementById('sub69').onclick = function() {
						var cname = "1AMM-AX001";
						var cvalue = "2,Temporizadores";
						var d = new Date();
						d.setTime(d.getTime() + (1*3*1000));
						var expires = "expires="+ d.toUTCString();
						document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
						location.reload();;
					};
				</script>
			</ul>
		</li>

	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
						<a href="single.html" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<!--div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div-->
				<!---->
				<!--div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer  </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div-->
					<!--div class=" per1">
					<a href="single.html" ><img class="img-responsive" src="images/pro.jpg" alt="">
						<div class="six1">
							<h4>DISCOUNT</h4>
							<p>Up to</p>
							<span>60%</span>
						</div></a>
					</div-->
			</div>

				<div class="col-md-9 product1">
				<div id="itensButton">

				<?php
					if( !isset($_COOKIE["1AMM-AX001"]) ){
						$sql = "SELECT * FROM produtos";
					}else{
						$params = explode( ",", $_COOKIE["1AMM-AX001"] );
						if($params[0] == "1"){
							$sql = "SELECT * FROM produtos WHERE categoria LIKE '%".$params[1]."%'";
						}else if($params[0] == "2"){
							$sql = "SELECT * FROM produtos WHERE subcategoria LIKE '%".$params[1]."%'";
						}else if($params[0] == "3"){
							$sql = "SELECT * FROM produtos WHERE LOWER(categoria) LIKE '%".strtolower($params[1])."%' OR LOWER(subcategoria) LIKE '%".strtolower($params[1])."%' OR LOWER(nome) LIKE '%".strtolower($params[1])."%' OR LOWER(descricaoSimples) LIKE '%".strtolower($params[1])."%' OR LOWER(descricaoCompleta) LIKE '%".strtolower($params[1])."%' ";
						}else{
							$sql = "SELECT * FROM produtos";
						}
					}
					
					$result = $conn->query($sql);
					$count = 3;
		
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							if( $count % 3 == 0 ){
								echo "<div class=\" bottom-product\">";
							}
							echo " 
							<div class=\"col-md-4 bottom-cd simpleCart_shelfItem\">
							<div class=\"product-at \">
								<a href=\"single.html\"><img class=\"img-responsive\" src=\"images/" . $row["imagem1"]. "\" alt=\"\" style=\"height:200px; width:300px\">
								<div class=\"pro-grid\">
											<span class=\"buy-in\">Buy Now</span>
								</div>
							</a>	
							</div>
							<p class=\"tun\">". $row["nome"]. "</p>
							<a  href=\"\" class=\"item_add\" id=\"addToCart\" data-id=\"" . $row["produtoId"]. "\" data-name=\"" . $row["nome"]."\" data-price=\"" . $row["preco"]. "\" data-description=\"" . $row["descricaoSimples"]."\" data-imagem=\"" . $row["imagem1"]."\"><p class=\"number item_price\"><i> </i>R$". $row["preco"]. "</p></a>						
							</div>";
							$count = $count+1;
						if( $count % 3 == 0 ){
							echo "<div class=\"clearfix\"> </div></div>";
						}
						}
					} else {
						echo "0 results";
					}
					$conn->close();
				?>
					
				
				</div>
				</div>
		<div class="clearfix"> </div>
		<!--nav class="in">
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2 <span class="sr-only"></span></a></li>
					<li><a href="#">3 <span class="sr-only"></span></a></li>
					<li><a href="#">4 <span class="sr-only"></span></a></li>
					<li><a href="#">5 <span class="sr-only"></span></a></li>
					 <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
				  </ul>
				</nav-->
		</div>
		
		</div>
			
				<!---->

<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
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
<script type="module" src="./js/shoppingCart.js"></script>
<script type="module" src="./js/checkLogin.js"></script>
</body>
</html>
			