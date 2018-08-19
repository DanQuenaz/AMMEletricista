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

    <div class="tables">
        <div class="row">
        <div class="col-lg-12 mx-auto">
            <h2>Produtos Cadastrados</h2>
            <div class="form-row">
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-primary" id="cadProduto">Cadastrar produto</button>
                <script>
                  document.getElementById('cadProduto').onclick = function() {
                    window.open("./cadProduto.php", "_self")
                  };
                </script>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" value="1" autocomplete="off" checked> ID
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" value="2" autocomplete="off"> Nome
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" value="3" autocomplete="off"> Categoria
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option4" value="4" autocomplete="off"> Sub Categoria
                  </label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" class="form-control" name="inputPesquisa" id="inputPesquisa" placeholder="ID, Nome, Categoria, Sub Categoria..." required autofocus>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-secondary" name="queryPesquisa" id="queryPesquisa">Pesquisar</button>
                <script>
                    document.getElementById('queryPesquisa').onclick = function() {
                      var radios = document.getElementsByName('options');
                      for(var i=0; i<radios.length;++i){
                        if(radios[i].checked){
                          var cname = "0AMM-AX001";
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
                <th scope="col">Item ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th scope="col">Sub Categoria</th>
                <th scope="col">Descrição Simples</th>
                <th scope="col">Descrição Completa</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
              <?php
                if( !isset($_COOKIE["0AMM-AX001"]) ){
                  $sql = "SELECT * FROM produtos";
                }else{
                  $params = explode( ",", $_COOKIE["0AMM-AX001"] );
                  if($params[1]==""){
                    $sql = "SELECT * FROM produtos";
                  }else{
                    if($params[0]=="1"){
                      $sql = "SELECT * FROM produtos WHERE LOWER(produtoId) LIKE LOWER('%".$params[1]."%');";
                    }else if($params[0]=="2"){
                      $sql = "SELECT * FROM produtos WHERE LOWER(nome) LIKE LOWER('%".$params[1]."%');";
                    }else if($params[0]=="3"){
                      $sql = "SELECT * FROM produtos WHERE LOWER(categoria) LIKE LOWER('%".$params[1]."%');";
                    }else if($params[0]=="4"){
                      $sql = "SELECT * FROM produtos WHERE LOWER(subcategoria) LIKE LOWER('%".$params[1]."%');";
                    }else{
                      $sql = "SELECT * FROM produtos";
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
                        <th scope='row'>".$row["produtoId"]. "</th>
                        <td>".$row["nome"]."</td>
                        <td>".$row["preco"]."</td>
                        <td>".$row["categoria"]."</td>
                        <td>".$row["subcategoria"]."</td>
                        <td>".$row["descricaoSimples"]."</td>
                        <td>".$row["descricaoCompleta"]."</td>
                        <td><a href='./editProduto?productid=".$row["produtoId"]."' class='btn btn-primary'>Editar</a></td>
                      </tr>;";
                      $count = $count+1;
                    
                  }
                } else {
                  echo "<tr><td>Nenhum recurso cadastrado!</td></tr>";
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
