<?php 

    require_once "./conectDB.php";

    $status = $_POST['inputAtlzStatus'];
    $rastreio = $_POST['inputRastreio'];
    $pedidoId = $_COOKIE['0AMM-CV003'];
    $atualizar = $_POST['atlzStatus'];

    if(isset($atualizar)){
        $sql = "UPDATE pedidos SET status_entrega = '".$status. "', rastreio='".$rastreio."' WHERE pedidoId= ".$pedidoId.";";

        if($conn->query($sql)){
            echo"<script language='javascript' type='text/javascript'>
                    alert('Status atualizado com sucesso!');
                    window.location.href='../pedidos.php';
                </script>";
        }else{
            echo"Erro";
        }
    }

?>