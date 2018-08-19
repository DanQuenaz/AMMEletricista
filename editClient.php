<?php
	require_once "./php/configDB.php"
?>
<!DOCTYPE html>
<html>
<head>
<title>AMM Eletricista</title>
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
							<span class="simpleCart_total" id="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> itens)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<script type="module">
							import * as DATA from './js/dataCart.js';
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

	
<!--content-->
<div class=" container">
<div class=" register">
    <h1>Editar Dados</h1>
    <?php
    if( isset( $_COOKIE["1AMM-CV002"] ) ){
		$dados = explode(",", $_COOKIE["1AMM-CV002"]);
        $sql = "SELECT * FROM usuarios WHERE usuarioId = ".$dados[1].";";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo"
            <form method='POST' action='./php/alterUser.php'>
			<div clas='form-row'>

				<div class='form-group col-md-6'>
					<h3>Informações Pessoais</h3><br>
					<div class='form-row'>
						<div class='form-group col-md-4'>
							<label for='firstName'>Primeiro Nome</label>
							<input type='text' step='0' class='form-control' name='firstName' id='firstName' placeholder='Primeiro nome' value='".$row["primeiroNome"]."' required>
						</div>
						<div class='form-group col-md-8'>
							<label for='lastName'>Sobre Nome</label>
							<input type='text' class='form-control' name='lastName' id='lastName' placeholder='Sobre nome' value='".$row["sobreNome"]."' required>
						</div>
					</div>

					<div class='form-row'>
						<div class='form-group col-md-6'>
							<label for='cpf'>CPF</label>
							<input type='number' step='off' class='form-control' name='cpf' id='cpf' placeholder='Somente numeros' value='".$row["cpf"]."' required>
						</div>
						<div class='form-group col-md-6'>
							<label for='tel'>Telefone</label>
							<input type='text' class='form-control' name='tel' id='tel' placeholder='(xx) x xxxx-xxxx' value='".$row["telefone"]."' required>
						</div>
					</div>

					<div class='form-row'>
						<div class='form-group col-md-10'>
							<label for='address'>Endereço</label>
							<input type='text'  class='form-control' name='address' id='address' placeholder='Rua, Avenida xxxxx' value='".$row["endereco"]."' required>
						</div>
						<div class='form-group col-md-2'>
							<label for='number'>Numero</label>
							<input type='number' class='form-control' name='number' id='number' placeholder='' value='".$row["numero"]."' required>
						</div>
					</div>

					<div class='form-row'>
						<div class='form-group col-md-6'>
							<label for='bairroName'>Bairro</label>
							<input type='text'  class='form-control' name='bairroName' id='bairroName' placeholder='Seu bairro' value='".$row["bairro"]."' required>
						</div>
						<div class='form-group col-md-6'>
							<label for='cityName'>Cidade</label>
							<input type='text'  class='form-control' name='cityName' id='cityName' placeholder='Sua cidade' value='".$row["cidade"]."' required>
						</div>
					</div>

					<div class='form-row'>
						<div class='form-group col-md-3'>
							<label for='stateName'>Estado</label>
							<select name='stateName' id='stateName' class='form-control' required>
								<option selected>".$row["estado"]."</option>
								<option>AC</option>
								<option>AL</option>
								<option>AP</option>
								<option>AM</option>
								<option>BA</option>
								<option>CE</option>
								<option>DF</option>
								<option>ES</option>
								<option>GO</option>
								<option>MA</option>
								<option>MT</option>
								<option>MS</option>
								<option>MG</option>
								<option>PA</option>
								<option>PB</option>
								<option>PR</option>
								<option>PE</option>
								<option>PI</option>
								<option>RJ</option>
								<option>RN</option>
								<option>RS</option>
								<option>RO</option>
								<option>RR</option>
								<option>SC</option>
								<option>SP</option>
								<option>SE</option>
								<option>TO</option>
							</select>
						</div>
						<div class='form-group col-md-9'>
							<label for='cep'>CEP</label>
							<input type='text'  class='form-control' name='cep' id='cep' placeholder='xx.xxx-xxx' value='".$row["cep"]."' required>
						</div>
					</div>

				</div>

				<div class='form-group col-md-6'>
					<h3>Informações de Login</h3><br>
					<div class='form-row'>
						<div class='form-group col-md-6'>
							<label for='email'>Email</label>
							<input type='email'  class='form-control' name='email' id='email' placeholder='Seu email' value='".$row["email"]."' required>
						</div>
						<div class='form-group col-md-6'>
							<label for='confirmEmail'>Confirme o Email</label>
							<input type='email'  class='form-control' name='confirmEmail' id='confirmEmail' placeholder='Confirme seu email' value='".$row["email"]."' required>
						</div>
					</div>

					<div class='form-row'>
						<div class='form-group col-md-6'>
							<label for='password'>Senha</label>
							<input type='password'  class='form-control' name='password' id='password' placeholder='************' value='-1-1-1-1-1-' required>
						</div>
						<div class='form-group col-md-6'>
							<label for='confirmPassword'>Confirme a Senha</label>
							<input type='password'  class='form-control' name='confirmPassword' id='confirmPassword' placeholder='************' value='-1-1-1-1-1-' required>
						</div>
					</div>

					<div class='form-row'>
					<div class='form-group col-md-12'>
						<button type='submit' class='btn btn-warning btn-lg btn-block' name='alterar' id='alterar'>Alterar Dados</button>
					</div>
				</div>
				</div>

			</div>

			<div class='clearfix'> </div>
		</form>
            ";
        }
        
    }
		
    ?>
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
<script type="module" src="./js/checkCart.js"></script>


</body>
</html>
			