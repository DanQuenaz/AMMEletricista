<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	require_once "./php/configDB.php"
?>

<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Signle :: w3layouts</title>
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
 

<script src="js/main.js"></script>
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
						<li><a class="color1" href="products.php">Produtos</a></li>				
						<li><a class="color6" href="contact.php">Contato</a></li>
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
							<li class="subitem1"><a href="./products.php?search=2,Transformadores" id="sub1">Transformadores</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Relés" id="sub2">Relés</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Contatores" id="sub3">Contatores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Reatores" id="sub4">Reatores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Contatores" id="sub5">Terminais e Conectores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Fontes" id="sub6">Fontes</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Acessórios" id="sub7">Acessórios</a></li>
						</ul>
					</li>
					<li class="item2"><a href="#">Condutores</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Isolantes" id="sub8">Isolantes</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Arame" id="sub9">Arame</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Cabos" id="sub10">Cabos</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Fio telefônico" id="sub11">Fio telefônico</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Acessórios para Fios e Cabos" id="sub12">Acessórios para Fios e Cabos</a></li>
						</ul>
					</li>
					<li class="item3"><a href="#">Banho e Aquecimento</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Pressurizador" id="sub13">Pressurizador</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Torneiras Eletrônicas" id="sub14">Torneiras Eletrônicas</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Aquecedores" id="sub15">Aquecedores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Chuveiros" id="sub16">Chuveiros</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Duchas Quentes" id="sub17">Duchas Quentes</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Duchas Frias" id="sub18">Duchas Frias</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Resistências" id="sub19">Resistências</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Acessórios" id="sub20">Acessórios</a></li>
						</ul>
					</li>
					<li class="item4"><a href="#">Caixas e Quadros</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Caixas de Montagem" id="sub21">Caixas de Montagem</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Caixas de Telefonia" id="sub22">Caixas de Telefonia</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Caixas de Passagem PVC" id="sub23">Caixas de Passagem PVC</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Caixas de Passagem Chapa" id="sub24">Caixas de Passagem Chapa</a></li>
							<li class="subitem3"><a href="./products.php?search2,Quadros de Energia PVC" id="sub25">Quadros de Energia PVC</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Quadros de Energia Chapa" id="sub26">Quadros de Energia Chapa</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Acessórios para Caixas e Quadros" id="sub27">Acessórios para Caixas e Quadros</a></li>
						</ul>
					</li>
							
					<li class="item4"><a href="#">Eletrodutos e Conduletes</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Luvas" id="sub28">Luvas</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Abraçadeiras" id="sub29">Abraçadeiras</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Canaletas" id="sub30">Canaletas</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Curvas" id="sub31">Curvas</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Conduletes de Alumínio" id="sub32">Conduletes de Alumínio</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Conduletes PVC" id="sub33">Conduletes PVC</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Eletrodutos Galvanizados" id="sub34">Eletrodutos Galvanizados</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Eletrodutos de PVC" id="sub35">Eletrodutos de PVC</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Acessórios" id="sub36">Acessórios</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Dispositivos de Proteção Elétrica</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Disjuntores" id="sub37">Disjuntores</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Interruptores Diferenciais" id="sub38">Interruptores Diferenciais</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Fusíveis" id="sub39">Fusíveis</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Filtro de linha" id="sub40">Filtro de linha</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Protetor DPS" id="sub41">Protetor DPS</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Ferramentas</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Detectores" id="sub42">Detectores</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Medidores" id="sub43">Medidores</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Informática</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Nobreak/Estabilizador" id="sub44">Nobreak/Estabilizador</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Rede" id="sub45">Rede</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Cabos" id="sub46">Cabos</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Periféricos" id="sub47">Periféricos</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Componentes Eletrônicos" id="sub48">Componentes Eletrônicos</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Racks" id="sub49">Racks</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Filtro de Linha" id="sub50">Filtro de Linha</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Interruptores e Tomadas</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Chaves" id="sub51">Chaves</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Interruptores" id="sub52">Interruptores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Conjuntos" id="sub53">Conjuntos</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Placas e Tampas" id="sub54">Placas e Tampas</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Pulsadores" id="sub55">Pulsadores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Tomadas" id="sub56">Tomadas</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Suportes" id="sub57">Suportes</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Variadores" id="sub58">Variadores</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Segurança</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Câmeras e Acessórios" id="sub59">Câmeras e Acessórios</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Segurança" id="sub60">Segurança</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Sirenes" id="sub61">Sirenes</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Equipamento Segurança Industrial" id="sub62">Equipamento Segurança Industrial</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Alarmes" id="sub63">Alarmes</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Interfones e Acessórios" id="sub64">Interfones e Acessórios</a></li>
						</ul>
					</li>

					<li class="item4"><a href="#">Automação</a>
						<ul class="cute">
							<li class="subitem1"><a href="./products.php?search=2,Botoeiras" id="sub65">Botoeiras</a></li>
							<li class="subitem2"><a href="./products.php?search=2,Botão comando" id="sub66">Botão comando</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Sensores" id="sub67">Sensores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Controladores" id="sub68">Controladores</a></li>
							<li class="subitem3"><a href="./products.php?search=2,Temporizadores" id="sub69">Temporizadores</a></li>
						</ul>
					</li>
				</ul>
			</div>
				<!--initiate accordion-->
			<script type="text/javascript">
				$(function() {
					var menu_ul = $('.menu > li > ul'), menu_a  = $('.menu > li > a');
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
		</div>
		<?php
			if( isset($_GET["itemid"]) ){
				$sql = "SELECT * FROM produtos WHERE produtoId = ".$_GET["itemid"].";";
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					echo"
					<div class='col-md-9 product-price1'>
						<div class='col-md-5 single-top'>	
							<div class='flexslider'>
								<ul class='slides'>
									<li data-thumb='images/".$row["imagem1"]."'><img src='./images/".$row["imagem1"]."' /></li>
									<li data-thumb='images/".$row["imagem2"]."'><img src='images/".$row["imagem2"]."' /></li>
									<li data-thumb='images/".$row["imagem3"]."'><img src='images/".$row["imagem3"]."' /></li>
									<li data-thumb='images/".$row["imagem4"]."'><img src='images/".$row["imagem4"]."' /></li>
								</ul>
							</div>
							<!-- FlexSlider -->
							<script defer src='js/jquery.flexslider.js'></script>
							<link rel='stylesheet' href='css/flexslider.css' type='text/css' media='screen' />

							<script>
							// Can also be used with $(document).ready()
								$(window).load(function() {
									$('.flexslider').flexslider({
										animation: 'slide',
										controlNav: 'thumbnails'
									});
								});
							</script>
						</div>	
						<div class='col-md-7 single-top-in simpleCart_shelfItem'>
							<div class='single-para '>
								<h4>".$row["nome"]."</h4>
								<h5 class='item_price'>R$ ".$row["preco"]."</h5>
								<p>".$row["descricaoSimples"]."</p>
								<a  href='' class='btn btn-warning btn-lg btn-block' id='addToCart' data-id='" . $row["produtoId"]. "' data-name='" . $row["nome"]."' data-price='" . $row["preco"]. "' data-description='" . $row["descricaoSimples"]."' data-imagem='" . $row["imagem1"]."' data-peso='".$row["peso"]."' data-altura='".$row["altura"]."' data-largura='".$row["largura"]."' data-comprimento='".$row["comprimento"]."'>Adicionar ao Carrinho</a>	
							</div>
						</div>

						<div class='clearfix'> </div>
								<!---->
						<div class='cd-tabs'>
							<nav>
								<ul class='cd-tabs-navigation'>
									<li><a data-content='fashion'  href='#0'>Description </a></li>
									<li><a data-content='cinema' href='#0' >Addtional Informatioan</a></li>
									
								</ul> 
							</nav>
							<ul class='cd-tabs-content'>
								<li data-content='fashion' >
									<div class='facts'>
										<p >".$row["descricaoCompleta"]."</p>        
									</div>
								</li>
								<li data-content='cinema' >
									<div class='facts1'>
												
										<div class='color'><p>Color</p>
											<span >Blue, Black, Red</span>
											<div class='clearfix'></div>
										</div>
										<div class='color'>
											<p>Size</p>
											<span >S, M, L, XL</span>
											<div class='clearfix'></div>
										</div>			
									</div>
								</li>
								<div class='clearfix'></div>
							</ul> 
						</div> 	
					</div>";
				}
			}else{
				echo "Dados expirados!";
			}
		?>

		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
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

<script type="module" src="./js/shoppingCart.js"></script>

</body>
</html>
			