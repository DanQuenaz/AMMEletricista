<?php
//header("access-control-allow-origin: https://pagseguro.uol.com.br");
header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
header("Content-Type: text/html; charset=UTF-8",true);
date_default_timezone_set('America/Sao_Paulo');

require_once("./configDB.php");
require_once("./PagSeguro.class.php");
$PagSeguro = new PagSeguro();


$sql = "SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'ammaletricista'
AND   TABLE_NAME   = 'pedidos';";

//AQUISIÇÂO VARIAVEIS
$dataUser_ = json_decode($_COOKIE['1AMM-AX_DATAUSER_'], true);

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_codigo = $row['AUTO_INCREMENT'];

$_nome = $dataUser_['nome'];
$_email = $dataUser_['email'];
$_telefone = $dataUser_['telefone'];
$_endereco = $_POST['inputEndereco'];
$_numero = $_POST['inputNumero'];
$_bairro = $_POST['inputBairro'];
$_cidade = $_POST['inputCidade'];
$_estado = $_POST['inputEstado'];
$_cep = $_POST['inputCEP'];



	
//EFETUAR PAGAMENTO	
$venda = array("codigo"=>$_codigo,
			   "valor"=>100.00,
			   "descricao"=>"COMPRA NA AMM ELETRICISTA",
			   "nome"=>$_nome,
			   "email"=>'c4001443244043870227@sandbox.pagseguro.com.br',
			   "telefone"=>$_telefone,
			   "rua"=>$_endereco,
			   "numero"=>$_numero,
			   "bairro"=>$_bairro,
			   "cidade"=>$_cidade,
			   "estado"=>$_estado, //2 LETRAS MAIÚSCULAS
			   "cep"=>$_cep,
			   "codigo_pagseguro"=>"");
			   
$PagSeguro->executeCheckout($venda,"http://localhost/ammeletricista/loged.php");

//----------------------------------------------------------------------------


//RECEBER RETORNO
if( isset($_GET['transaction_id']) ){
	$pagamento = $PagSeguro->getStatusByReference($_GET['codigo']);
	
	$pagamento->codigo_pagseguro = $_GET['transaction_id'];
	if($pagamento->status==3 || $pagamento->status==4){
		//ATUALIZAR DADOS DA VENDA, COMO DATA DO PAGAMENTO E STATUS DO PAGAMENTO
		
	}else{
		//ATUALIZAR NA BASE DE DADOS
	}
}

?>