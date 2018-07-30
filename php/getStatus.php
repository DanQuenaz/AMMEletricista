<?php
	require_once("PagSeguro.class.php");

	if(isset($_GET['reference'])){
		$PagSeguro = new PagSeguro();
		$P = $PagSeguro->getStatusByReference($_GET['reference']);
		echo 'Status: '.(int)$P;
		if($P != NULL) echo $PagSeguro->getStatusText((int)$P);
		else echo "NULL";
	}else{
	    echo "Parâmetro \"reference\" não informado!";
	}

?>