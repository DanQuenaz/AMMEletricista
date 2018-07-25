<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Checkout :: w3layouts</title>
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
					<li ><a class="color2" href="index.php">Início</a></li>	
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
					<li><a class="color6" href="contact.php">Contato</a></li>
				</ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	
</div>

	
<div class="container">
	<div class="check">	 
		<?php
			if( isset($_COOKIE["1AMM-CT001"]) ){

				if( isset($_COOKIE["1AMM-REDIRECT"]) ){
					if( isset($_COOKIE["1AMM-CEPX002"]) ){
						$check_ = explode("_", $_COOKIE["1AMM-CEPX002"]);
						if($check_[1] != '0.0'){
							if( isset($_COOKIE["1AMM-CV002"]) ){
								echo "
									<script>
										document.cookie = '1AMM-REDIRECT' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
										window.location.href='./endPurchase.php';
									</script>
								";
							}else{
								echo "
									<script>
										alert('Você precisa estar logado para finalizar a compra!');
										document.cookie = '1AMM-REDIRECT' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
										window.location.href='./login.php';
									</script>
								";
							}
						}else{
							echo "
								<script>
									alert('Selecione uma das opções de entrega antes de finalizar a compra!');
								</script>
							";
						}
					}else{
						echo "
							<script>
								alert('Insira o cep para entrega antes de finalizar a compra!');
							</script>
						";
					}
				}

				$data = json_decode( $_COOKIE["1AMM-CT001"], true );
				$max = sizeof($data);
				$frete = 0;
				if( isset($_COOKIE["1AMM-CEPX002"]) ){
					$dadosCep = explode("_", $_COOKIE["1AMM-CEPX002"]);
					$frete = $dadosCep[1];
				}
				$total = 0;

				$peso = 0.0;
				$alturaMin = 0.0;
				$larguraMin = 0.0;
				$comprimentoMin = 0.0;
				$volume = 0.0;

				echo"
				<h1>Meu Carrinho (".$max.")</h1>
				<div class='col-md-9 cart-items'>
				<div id='productsCheckout'>";
				for($i=0; $i<$max; $i++){

					$subtotal = $data[$i]["quant"] * $data[$i]["preco"];
					$total += $subtotal;
					$peso += $data[$i]["peso"] * $data[$i]["quant"];
					$volume += $data[$i]["altura"] * $data[$i]["largura"] * $data[$i]["comprimento"] * $data[$i]["quant"];;

					if($data[$i]["altura"] > $alturaMin) $alturaMin = $data[$i]["altura"];
					if($data[$i]["largura"] > $larguraMin) $larguraMin = $data[$i]["largura"];
					if($data[$i]["comprimento"] > $comprimentoMin) $comprimentoMin = $data[$i]["comprimento"];

					echo
					"
						<div class='cart-header'>
							<a  href='#' id='x".$i."'><img src='../images/close_1.png' class='img-responsive' alt='Deletar item'/></a>
							<script type='module'>
							import * as DATA from './js/dataCart';
							document.getElementById('x".$i."').onclick=function(){
								//console.log(".$data[$i]["id"].");
								DATA.loadCart();
								DATA.deleteItem(".$data[$i]["id"].");
								DATA.saveCartCookie();
								location.reload();
							};
						</script>
							<div class='cart-sec simpleCart_shelfItem'>
									<div class='cart-item cyc'>
										<img src='../images/".$data[$i]["imagem"]."' class='img-responsive' alt=''/>
									</div>
								<div class='cart-item-info'>
										<h3><a href='single.php?itemid=".$data[$i]["id"]."'>".$data[$i]["nome"]."</a><span>".$data[$i]["descricao"]."</span></h3>
										<ul class='qty'>
											<li><p>Quantidade: ".$data[$i]["quant"]."</p></li><br>
											<li><p>Prç. unitário: R$".$data[$i]["preco"]."</p></li><br>
										</ul>
										<div class='delivery'>
											<p><b>Total : R$".$subtotal."</b></p>
											<!--span>Delivered in 2-3 bussiness days</span-->
											<div class='clearfix'></div>
										</div>								
								</div>
								<div class='clearfix'></div>                       
							</div>
						</div>";
				}
				if($max == 0){
					echo"Carrinho vazio!";
				}
				echo"
				</div>
				</div>
				<div class='col-md-3 cart-total'>
					<a class='continue' href='./products.php'>Continue comprandro</a>
					<div class='price-details'>
						<h3>Price Details</h3>
						<span>Total dos produtos</span>
						<span class='total1' id='total1Check'>R$".$total."</span>
						<span>Discount</span>
						<span class='total1'>---</span>
						<span>Delivery Charges</span>
						<span class='total1'>150.00</span>
						<div class='clearfix'></div>				 
					</div>
					<br>";
				if( 0 && $max>0){

				}else if($max > 0){
					if( isset($_COOKIE["1AMM-CEPX002"]) ){
						$dadosCep = explode("_", $_COOKIE["1AMM-CEPX002"]);
						$cep_ = str_replace("-", "", $dadosCep[0]);
						$cep_ = str_replace(".", "", $cep_);
						$cep_ = str_replace(" ", "", $cep_);
						$volumeCalc = 0.0;
						
						while($volumeCalc < $volume){
							$volumeCalc = $alturaMin * $larguraMin * $comprimentoMin;
							if($volumeCalc < $volume){
								$larguraMin += 0.1;
								$alturaMin += 0.1;
								$comprimentoMin += 0.1;
							}
						}

						$parametros = array();
						
						$parametros['nCdEmpresa'] = '';
						$parametros['sDsSenha'] = '';
						
						$parametros['sCepOrigem'] = '35900539';
						$parametros['sCepDestino'] = $cep_;
						
						$parametros['nVlPeso'] = $peso;
						
						$parametros['nCdFormato'] = '1';
						
						$parametros['nVlComprimento'] = $comprimentoMin;
						$parametros['nVlAltura'] = $alturaMin;
						$parametros['nVlLargura'] = $larguraMin;
						$parametros['nVlDiametro'] = '0';
						
						$parametros['sCdMaoPropria'] = 's';
						
						if($total > 18.50 )$parametros['nVlValorDeclarado'] = $total;
						else $parametros['nVlValorDeclarado'] = '0';
						
						$parametros['sCdAvisoRecebimento'] = 'n';
						
						$parametros['StrRetorno'] = 'xml';
						
						$parametros['nCdServico'] = '40010,41106';
						
						$parametros = http_build_query($parametros);
						$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
						$curl = curl_init($url.'?'.$parametros);
						curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
						$dados = curl_exec($curl);
						$dados = simplexml_load_string($dados);
						echo"
						<div class='price-details'>
							<h3>Frete</h3>";
						$countOps = 0;
						foreach($dados->cServico as $linhas) {
							if($linhas->Erro == 0) {

								if($linhas->Codigo == '40010') $codigoServico = 'Sedex: --- ';
								else $codigoServico = 'PAC: ------ ';

								echo "
								<div class='radio'>
									<label>".$codigoServico." </label>
									<label><input type='radio' name='optradio' id='opt1".$countOps."'> R$".$linhas->Valor." - ".$linhas->PrazoEntrega." dia(s)</label>
									<script>
										document.getElementById('opt1".$countOps."').onclick = function(){
											var cname = '1AMM-CEPX002';
											var cvalue = ''+".$dadosCep[0]."+'_'+'".str_replace(",", ".", $linhas->Valor)."';
											var d = new Date();
											d.setTime(d.getTime() + (60*60*1000));
											var expires = 'expires='+ d.toUTCString();
											document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

											document.cookie = '1AMM-REDIRECT' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';

											location.reload();
										}
									</script>
								</div>";
								//echo .' Dias </br>';
								$countOps = $countOps+1;
							}else {
								echo $linhas->MsgErro;
							}
						}
						echo"
						</div>
						";
						
					}else{
						echo"
						<div class='price-details'>
							<h3>Frete</h3>
							<div class='radio'>
								<span>CEP</span>
								<input type='text' name='inputCEP' id='inputCEP'>
								<button type='button' class='btn btn-warning' id='okCEP'>OK</button>
								<script>
									document.getElementById('okCEP').onclick = function(){

										var cname = '1AMM-CEPX002';
										var cvalue = document.getElementById('inputCEP').value + '_0.0';
										var d = new Date();
										d.setTime(d.getTime() + (60*60*1000));
										var expires = 'expires='+ d.toUTCString();
										document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

										document.cookie = '1AMM-REDIRECT' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';

										location.reload();
									}
								</script>
							</div>
						</div>
						";
					}
					
				}
				$totalFrete = $total;
				if($max>0) $totalFrete = $totalFrete + $frete;
				

				
				echo"
					<ul class='total_price'>
					<li class='last_price'> <h4>TOTAL</h4></li>	
					<li class='last_price' id='total2Check'><span>R$".$totalFrete."</span></li>
					<div class='clearfix'> </div>
					</ul>
					
					<div class='clearfix'></div>
					<a class='order' href='#' id='endPurchaseClick'>Finalizar compra</a>
					<script>
						document.getElementById('endPurchaseClick').onclick = function(){
							var cname = '1AMM-REDIRECT';
							var cvalue = 'TRUE0039348c8cj82';
							var d = new Date();
							d.setTime(d.getTime() + (60*60*1000));
							var expires = 'expires='+ d.toUTCString();
							document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

							location.reload();
						}
					</script>
					";
			}else{

			}

		?>
		 
		  
			<!--div class="total-item">
					<h3>OPTIONS</h3>
					<h4>COUPONS</h4>
					<a class="cpns" href="#">Apply Coupons</a>
					<p><a href="#">Log In</a> to use accounts - linked coupons</p>
				</div-->
			</div>
		
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


</body>
</html>
			