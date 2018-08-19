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

    <title>AMM Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AMM Admin</a>
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
                    document.cookie = '0AMM-LG000' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    window.open("./index.php","_self");
                    };
                </script>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="cadform">
        <h2>Editar Produto</h2>
        <br>
        <form method="POST" action="./php/editarProduto.php" enctype="multipart/form-data">

            <?php
                if(!isset($_GET["productid"])) {
                    echo "Dados expirados, tente novamente!";
                } else {
                    $sql = "SELECT * FROM produtos WHERE produtoId=".$_GET["productid"].";";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        
                        echo "
                        <div class='form-group'>
                          <label for='inputId'>ID do produto</label>
                          <input type='text' class='form-control' name='inputId' id='inputId'  value='".$row["produtoId"]."'>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col-md-6'>
                            <label for='inputNome'>Nome</label>
                            <input type='text' class='form-control' name='inputNome' id='inputNome' placeholder='Nome' value='".$row["nome"]."' required autofocus>
                            </div>
                            <div class='form-group col-md-6'>
                            <label for='inputDescSim'>Descriçao Simples</label>
                            <input type='text' class='form-control' name='inputDescSim' id='inputDescSim' placeholder='Descriçao Simples' value='".$row["descricaoSimples"]."' required>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label for='inputDescCom'>Descriçao Completa</label>
                            <textarea class='form-control' name='inputDescCom' id='inputDescCom' rows='3' required>".$row["descricaoCompleta"]."</textarea>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col-md-4'>
                              <label for='inputCategoria'>Categoria</label>
                              <select name='inputCategoria' id='inputCategoria' class='form-control'>
                                  <option selected>".$row["categoria"]."</option>
                                  <option>Peças e Componentes Industriais</option>
                                  <option>Condutores</option>
                                  <option>Banho e Aquecimento</option>
                                  <option>Caixas e Quadros </option>
                                  <option>Eletrodutos e Conduletes</option>
                                  <option>Dispositivos de Proteção Elétrica</option>
                                  <option>Ferramentas</option>
                                  <option>Informática</option>
                                  <option>Interruptores e Tomadas</option>
                                  <option>Segurança</option>
                                  <option>Automação</option>
                              </select>
                            </div>
                            <div class='form-group col-md-4'>
                              <label for='inputSubcategoria'>Subcategoria</label>
                              <select name='inputSubcategoria' id='inputSubcategoria' class='form-control'>
                              <option selected>".$row["subcategoria"]."</option>
                                  <option>Transformadores</option>
                                  <option>Relés</option>
                                  <option>Contatores</option>
                                  <option>Reatores</option>
                                  <option>Terminais e Conectores</option>
                                  <option>Fontes</option>
                                  <option>Acessórios</option>
                                  <option>Isolantes</option>
                                  <option>Arame</option>
                                  <option>Cabos</option>
                                  <option>Fio telefônico</option>
                                  <option>Acessórios para Fios e Cabos</option>
                                  <option>Pressurizador</option>
                                  <option>Torneiras Eletrônicas</option>
                                  <option>Aquecedores</option>
                                  <option>Chuveiros</option>
                                  <option>Duchas Quentes</option>
                                  <option>Duchas Frias</option>
                                  <option>Resistências</option>
                                  <option>Acessórios</option>
                                  <option>Caixas de Montagem</option>
                                  <option>Caixas de Telefonia</option>
                                  <option>Caixas de Passagem PVC</option>
                                  <option>Caixas de Passagem Chapa</option>
                                  <option>Quadros de Energia PVC</option>
                                  <option>Quadros de Energia Chapa</option>
                                  <option>Acessórios para Caixas e Quadros</option>
                                  <option>Luvas</option>
                                  <option>Abraçadeiras</option>
                                  <option>Canaletas</option>
                                  <option>Curvas</option>
                                  <option>Conduletes de Alumínio</option>
                                  <option>Conduletes PVC</option>
                                  <option>Eletrodutos Galvanizados</option>
                                  <option>Eletrodutos de PVC</option>
                                  <option>Acessórios</option>
                                  <option>Disjuntores</option>
                                  <option>Interruptores Diferenciais</option>
                                  <option>Fusíveis</option>
                                  <option>Filtro de linha</option>
                                  <option>Protetor DPS</option>
                                  <option>Detectores</option>
                                  <option>Medidores</option>
                                  <option>Nobreak/Estabilizador</option>
                                  <option>Rede</option>
                                  <option>Cabos</option>
                                  <option>Periféricos</option>
                                  <option>Componentes Eletrônicos</option>
                                  <option>Racks</option>
                                  <option>Filtro de Linha</option>
                                  <option>Chaves</option>
                                  <option>Interruptores</option>
                                  <option>Conjuntos</option>
                                  <option>Placas e Tampas</option>
                                  <option>Pulsadores</option>
                                  <option>Tomadas</option>
                                  <option>Suportes</option>
                                  <option>Variadores</option>
                                  <option>Câmeras e Acessórios</option>
                                  <option>Segurança</option>
                                  <option>Sirenes</option>
                                  <option>Equipamento Segurança Industrial</option>
                                  <option>Alarmes</option>
                                  <option>Interfones e Acessórios</option>
                                  <option>Botoeiras</option>
                                  <option>Botão comando</option>
                                  <option>Sensores</option>
                                  <option>Controladores</option>
                                  <option>Temporizadores</option>
                              </select>
                            </div>
                            <div class='form-group col-md-4'>
                              <label for='inputPreco'>Preço</label>
                              <input type='number' step='0.01' class='form-control' name='inputPreco' id='inputPreco' placeholder='Preço' value='".$row["preco"]."' required>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col-md-3'>
                              <label for='inputPeso'>Peso(Kg)</label>
                              <input type='number' step='0.01' class='form-control' name='inputPeso' id='inputPeso' placeholder='Peso(Kg)' value='".$row["peso"]."' required autofocus>
                            </div>
                            <div class='form-group col-md-3'>
                              <label for='inputAltura'>Altura(cm)</label>
                              <input type='number' step='0.01' class='form-control' name='inputAltura' id='inputAltura' placeholder='Altura(cm)' value='".$row["altura"]."' required autofocus>
                            </div>
                            <div class='form-group col-md-3'>
                              <label for='inputLargura'>Largura(cm)</label>
                              <input type='number' step='0.01' class='form-control' name='inputLargura' id='inputLargura' placeholder='Largura(cm)' value='".$row["largura"]."' required autofocus>
                            </div>
                            <div class='form-group col-md-3'>
                              <label for='inputComprimento'>Comprimento(cm)</label>
                              <input type='number' step='0.01' class='form-control' name='inputComprimento' id='inputComprimento' placeholder='Comprimento(cm)' value='".$row["comprimento"]."' required autofocus>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col-md-6'>
                              <label for='inputImage1'>Imagem 1 (Principal)</label>
                              <input type='file' class='form-control-file' name='inputImage1' id='inputImage1' required>
                            </div>
                            <div class='form-group col-md-6'>
                              <label for='inputImage2'>Imagem 2</label>
                              <input type='file' class='form-control-file' name='inputImage2' id='inputImage2' required>
                            </div>
                            <div class='form-group col-md-6'>
                              <label for='inputImage3'>Imagem 3</label>
                              <input type='file' class='form-control-file' name='inputImage3' id='inputImage3' required>
                            </div>
                            <div class='form-group col-md-6'>
                              <label for='inputImage4'>Imagem 4</label>
                              <input type='file' class='form-control-file' name='inputImage4' id='inputImage4' required>
                            </div>
                        </div>
                        <div class='form-group'>
                        </div>
                        <button type='submit' class='btn btn-primary' name='cadastrar' id='cadastrar' >Cadastrar</button>";
                        
                        }
                    } else {
                        echo "<tr><td>Nenhuma família cadastrada!</td></tr>";
                    }
                    $conn->close();
                }
            ?>

            
        </form>

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
