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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AMM ADMIN</a>
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

    <div class="tables">
        <div class="row">
        <div class="col-lg-12 mx-auto">
            <h2>Clientes Cadastrados</h2>
            <br>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" value="1" autocomplete="off" checked> CPF
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" value="2" autocomplete="off"> Nome
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" value="3" autocomplete="off"> ID
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option4" value="4" autocomplete="off"> Email
                  </label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" class="form-control" name="inputPesquisa" id="inputPesquisa" placeholder="CPF, Nome, ID, Email..." required autofocus>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-secondary" name="queryPesquisa" id="queryPesquisa">Pesquisar</button>
                <script>
                    document.getElementById('queryPesquisa').onclick = function() {
                      var radios = document.getElementsByName('options');
                      for(var i=0; i<radios.length;++i){
                        if(radios[i].checked){
                          var cname = "0AMM-AX002";
                          var cvalue = radios[i].value + ',' + document.getElementById('inputPesquisa').value;
                          var d = new Date();
                          d.setTime(d.getTime() + (60*60*1000));
                          var expires = "expires="+ d.toUTCString();
                          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                          location.reload();
                        }
                      }
                      
                    };
                </script>
              </div>
            </div>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Cliente ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th>##</th>
                </tr>
            </thead>
            <tbody>

              <?php
                if( !isset($_COOKIE["0AMM-AX002"]) ){
                  $sql = "SELECT * FROM usuarios";
                }else{
                  $params = explode( ",", $_COOKIE["0AMM-AX002"] );
                  if($params[1]==""){
                    $sql = "SELECT * FROM usuarios";
                  }else{
                    if($params[0]=="1"){
                      $sql = "SELECT * FROM usuarios WHERE cpf LIKE '%".$params[1]."%';";
                    }else if($params[0]=="2"){
                      $sql = "SELECT * FROM usuarios WHERE primeiroNome LIKE '%".$params[1]."%';";
                    }else if($params[0]=="3"){
                      $sql = "SELECT * FROM usuarios WHERE usuarioId LIKE '%".$params[1]."%';";
                    }else if($params[0]=="4"){
                      $sql = "SELECT * FROM usuarios WHERE email LIKE '%".$params[1]."%';";
                    }else{
                      $sql = "SELECT * FROM usuarios";
                    }
                  }
                }

                $result = $conn->query($sql);
                $count = 0;

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    
                    echo " 
                    <tr>
                        <th scope=\"row\">". $row["usuarioId"]. "</th>
                        <td>".$row["primeiroNome"]." ".$row["sobreNome"]."</td>
                        <td>". $row["email"]. "</td>
                        <td>". $row["cpf"]. "</td>
                        <td>".$row["endereco"].", ".$row["bairro"].", ".$row["cidade"]." - ".$row["estado"]."</td>
                        <td>". $row["cidade"]. "</td>
                        <td>". $row["estado"]. "</td>
                        <td><button type=\"button\" class=\"btn btn-primary\" id=\"vslzCLiente".$count."\">Visualizar</button></td>
                      </tr>
                      <script>
                        document.getElementById('vslzCLiente".$count."').onclick = function() {
                          var cname = \"0AMM-CV002\";
                          var cvalue = ". $row["usuarioId"]. ";
                          var d = new Date();
                          d.setTime(d.getTime() + (10*60*1000));
                          var expires = \"expires=\"+ d.toUTCString();
                          document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                          window.open(\"./infoCliente.php\",\"_self\");
                        };
                      </script>";
                      $count = $count+1;
                    
                  }
                } else {
                  echo "<tr><td>Nenhum resultado encontrado!</td></tr>";
                }
                $conn->close();
                
              ?>

            </tbody>
            </table>
        </div>
        </div>
    </div>

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
