<!DOCTYPE html>

<?php
  require_once "./php/conectDB.php";

  if(!isset($_COOKIE["0AMM-LG000"])) {
    echo "<script language='javascript' type='text/javascript'>
      window.location.href='./index.php';
      alert('Você precisa estar logado para acessar essa página!');
  </script>";
  } else {
    setcookie("0AMM-LG000", $_COOKIE["0AMM-LG000"], time()+3600);
  }
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMM ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/info.css" rel="stylesheet" type="text/css" media="all" />

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ADMIN AMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./pedidos.php">Pedidos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-danger" id="quitQuit">Sair</button>
                <script>
                    document.getElementById('quitQuit').onclick = function() {
                    document.cookie = 'idLOgado' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    window.open("./index.php","_self");
                    };
                </script>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php
        require_once "./php/conectDB.php";

        if(isset($_COOKIE["0AMM-CV003"])){
            $idRegistro = $_COOKIE["0AMM-CV003"];

            $sql = "SELECT * FROM pedidos WHERE pedidoId = ".$idRegistro."";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo
                    "<div class=\"container\">
                    <div class=\"resume\">
                        <header class=\"page-header\">
                            <h1 class=\"page-title\"> Pedido Nº".$row["pedidoId"]."</h1>
                        </header>";

                $sql2 = "SELECT * FROM usuarios WHERE usuarioId =".$row["usuarioId"].";";
                $result2 = $conn->query($sql2);
                if($result2->num_rows > 0){
                    $row2 = $result2->fetch_assoc();
                    echo "<!-- CLIENTE -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Cliente: </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><b>Nome: </b>".$row2["primeiroNome"]." ".$row2["sobreNome"]."</li>
                            <li class=\"list-group-item\"><b>ID: </b>".$row2["usuarioId"]."</li>
                        </ul>
                    </div>";
                }
                    

                echo "<!-- ENDERECO -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Endereço de entrega </h4>
                        <p>
                            ".$row["endereco_entrega"]."
                        </p>
                    </div>

                    <!-- HORARIO -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Horário da compra </h4>
                        <p>"
                            .$row["hora_compra"].
                        "</p>
                    </div>
            
                    <!-- STATUS -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Status da compra: </h4>
                        <p>"
                            .$row["status_"].
                        "</p>
                    </div>
                    
                    <!-- PRECO -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Preço total: </h4>
                        <p>"
                        .$row["preco_total"].
                        "</p>
                    </div>
                    
                    <!-- PRODUTOS -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Itens da compra: </h4>
                        <table class=\"table table-striped table-responsive\">
                            <thead>
                            <tr><th>Produto ID</th>
                            <th>Nome</th>
                            <th>Quantidade</th>
                            </tr></thead>
                            <tbody>";
                $sql3 = "SELECT * FROM pedidosprodutos WHERE pedidoId =".$row["pedidoId"].";";
                $result3 = $conn->query($sql3);
                if($result3->num_rows > 0){
                    while($row3 = $result3->fetch_assoc()){
                        $sql4 = "SELECT * FROM produtos WHERE produtoId =".$row3["produtoId"].";";
                        $result4 = $conn->query($sql4);
                        if($result4->num_rows > 0){
                            $row4 = $result4->fetch_assoc();
                            echo"<tr>
                                <td>".$row4["produtoId"]."</td>
                                <td>".$row4["nome"]."</td>
                                <td>".$row3["quantidade"]."</td>
                            </tr>";
                        }
                        
                    }
                }
                echo            "</tbody>
                        </table>
                    </div>
                    </div>
                
                    </div>
                    </div>
                        
                    </div>
                    
                    </div><br><br>";
            }
        }
        ?>
        <form method="POST" action="./php/atualizaStatus.php" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputAtlzStatus">Status Entrega</label>
                    <select name="inputAtlzStatus" id="inputAtlzStatus" class="form-control">
                        <option selected>Aguardando para envio</option>
                        <option>Enviado</option>
                    </select>
                </div>
                <div class="form-group col-md-4" id="cdgRast" style="display:none">
                    <label for="inputRastreio">Código Rastreio</label>
                    <input type="text" class="form-control" name="inputRastreio" id="inputRastreio" placeholder="Código Rastreio" required>
                </div>
            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-secondary" name="atlzStatus" id="atlzStatus">Atualizar</button>
            </div>
        </form>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/login.js"></script>
    <script src="js/infoPedido.js"></script>

  </body>

</html>