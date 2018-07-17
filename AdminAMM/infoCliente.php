<!DOCTYPE html>

<?php
  require_once "./php/conectDB.php";

  if(!isset($_COOKIE["0AMM-LG000"])) {
    echo "<script language='javascript' type='text/javascript'>
      window.location.href='./index.php';
      alert('Você precisa estar logado para acessar essa página!');
  </script>";
  } else {

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

        if(isset($_COOKIE["0AMM-CV002"])){
            $idCliente = $_COOKIE["0AMM-CV002"];

            $sql = "SELECT * FROM usuarios WHERE usuarioId = ".$idCliente."";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo
                    "<div class=\"container\">
                    <div class=\"resume\">
                        <header class=\"page-header\">
                            <h1 class=\"page-title\"> Cliente Nº ".$row["usuarioId"]."</h1>
                        </header>";
                echo "<!-- CLIENTE -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Cliente: </h4>
                        <ul class=\"list-group\">
                            <li class=\"list-group-item\"><b>Nome: </b>".$row["primeiroNome"]." ".$row["sobreNome"]."</li>
                            <li class=\"list-group-item\"><b>ID: </b>".$row["usuarioId"]."</li>
                        </ul>
                    </div>";
                
                echo "<!-- ENDERECO -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Endereço </h4>
                        <p>
                            ".$row["endereco"].", ".$row["bairro"].", ".$row["cidade"]." - ".$row["estado"]."
                        </p>
                    </div>

                    <!-- EMAIL -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Email </h4>
                        <p>"
                            .$row["email"].
                        "</p>
                    </div>
            
                    <!-- CPF -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> CPF </h4>
                        <p>"
                            .$row["cpf"].
                        "</p>
                    </div>
                    
                    <!-- PEDIDOS -->
                    <div class=\"bs-callout bs-callout-danger\">
                        <h4> Pedidos </h4>
                        <table class=\"table table-striped table-responsive\">
                            <thead>
                            <tr><th>Pedido ID</th>
                            <th>Qnt Itens</th>
                            <th>Preço Total</th>
                            <th>Data Compra</th>
                            <th>Status Pedido</th>
                            <th>#</th>
                            </tr></thead>
                            <tbody>";
                $sql3 = "SELECT * FROM pedidos WHERE usuarioId =".$row["usuarioId"].";";
                $result3 = $conn->query($sql3);
                $count=0;
                if($result3->num_rows > 0){
                    while($row3 = $result3->fetch_assoc()){
                        echo"<tr>
                            <td>".$row3["pedidoId"]."</td>
                            <td>".$row3["numero_produtos"]."</td>
                            <td>".$row3["preco_total"]."</td>
                            <td>".$row3["hora_compra"]."</td>
                            <td>".$row3["status_"]."</td>
                            <td><button type=\"button\" class=\"btn btn-primary\" id=\"vslzPedido".$count."\">Visualizar</button></td>
                        </tr>
                        <script>
                          document.getElementById('vslzPedido".$count."').onclick = function() {
                            var cname = \"0AMM-CV003\";
                            var cvalue = ". $row3["pedidoId"]. ";
                            var d = new Date();
                            d.setTime(d.getTime() + (10*60*1000));
                            var expires = \"expires=\"+ d.toUTCString();
                            document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                            window.open(\"./infoPedido.php\",\"_self\");
                          };
                        </script>";
                        $count = $count+1;
                        
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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/login.js"></script>

  </body>

</html>