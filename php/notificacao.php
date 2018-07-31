<?php
	//header("access-control-allow-origin: https://pagseguro.uol.com.br");
	header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
	
	require_once("PagSeguro.class.php");
	require_once("./configDB.php");

	if(isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction'){
		
		$PagSeguro = new PagSeguro();
		$response = $PagSeguro->executeNotification($_POST);

		// ob_start();
		// var_dump($response);
		// $result = ob_get_clean();

		// $file = fopen("TEste.xml", "ab");
		// fwrite($file, $result);
		
		$sql = "UPDATE pedidos
				SET codigoPS = '".$response->code."', status_ = '".$PagSeguro->getStatusText((int)$response->status)."'
				WHERE pedidoId = ".$response->reference.";"; 

		$conn->query($sql);

		// // the message
		// $msg = "Status da sua compra alterado para: ".$PagSeguro->getStatusText((int)$response->status);

		// // use wordwrap() if lines are longer than 70 characters
		// $msg = wordwrap($msg,70);

		// // send email
		// mail("danquenazz@gmail.com","Status da Compra",$msg);

		// if( $response->status==3 || $response->status==4 ){
        // 	//PAGAMENTO CONFIRMADO
		// 	//ATUALIZAR O STATUS NO BANCO DE DADOS
			
		// }else{
		// 	//PAGAMENTO PENDENTE
		// 	echo $PagSeguro->getStatusText($PagSeguro->status);
		// }
	}
?>