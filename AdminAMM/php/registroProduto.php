<?php 

    require_once "./conectDB.php";

    $nome = $_POST['inputNome'];
    $descSim = $_POST['inputDescSim'];
    $descCom = $_POST['inputDescCom'];
    $categoria = $_POST['inputCategoria'];
    $subcategoria = $_POST['inputSubcategoria'];
    $preco = $_POST['inputPreco'];
    $peso = $_POST['inputPeso'];
    $altura = $_POST['inputAltura'];
    $largura = $_POST['inputLargura'];
    $comprimento = $_POST['inputComprimento'];
    $cadastrar = $_POST['cadastrar'];

    $target_dir = "../../images/";

    $name1 = basename($_FILES["inputImage1"]["name"]);
    $target_file1 = $target_dir . basename($_FILES["inputImage1"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    $name2 = basename($_FILES["inputImage2"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["inputImage2"]["name"]);
    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

    $name3 = basename($_FILES["inputImage3"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["inputImage3"]["name"]);
    $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

    $name4 = basename($_FILES["inputImage4"]["name"]);
    $target_file4 = $target_dir . basename($_FILES["inputImage4"]["name"]);
    $imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));

    $uploadOk = 1;
    
    if (isset($cadastrar)) {
        $sql = "INSERT INTO `produtos` (`produtoId`, `nome`, `preco`, `descricaoSimples`, `descricaoCompleta`, `categoria`, `subcategoria`, `peso`, `altura`, `largura`, `comprimento`, `imagem1`, `imagem2`, `imagem3`, `imagem4`) VALUES (NULL, '".$nome."', '".$preco."', '".$descSim."', '".$descCom."', '".$categoria."', '".$subcategoria."', '".$peso."', '".$altura."', '".$largura."', '".$comprimento."', '".$name1."', '".$name2."', '".$name3."', '".$name4."');";
        
        // Check if image file is a actual image or fake image
        $check1 = getimagesize($_FILES["inputImage1"]["tmp_name"]);
        $check2 = getimagesize($_FILES["inputImage2"]["tmp_name"]);
        $check3 = getimagesize($_FILES["inputImage3"]["tmp_name"]);
        $check4 = getimagesize($_FILES["inputImage4"]["tmp_name"]);
    
        if( ($check1 !== false) && ($check2 !== false) && ($check3 !== false) && ($check4 !== false) ) {
            echo "File is an image";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if ( file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3) || file_exists($target_file4) ) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ( $_FILES["inputImage1"]["size"] > 1000000 || $_FILES["inputImage2"]["size"] > 1000000 || $_FILES["inputImage3"]["size"] > 1000000 || $_FILES["inputImage4"]["size"] > 1000000 ) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if( ($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
        && $imageFileType1 != "gif") || ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
        && $imageFileType2 != "gif") || ($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
        && $imageFileType3 != "gif") || ($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
        && $imageFileType4 != "gif") ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if ( move_uploaded_file($_FILES["inputImage1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["inputImage2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["inputImage3"]["tmp_name"], $target_file3) && move_uploaded_file($_FILES["inputImage4"]["tmp_name"], $target_file4) && $conn->query($sql)) {
                echo "The file has been uploaded.";
                echo"<script language='javascript' type='text/javascript'>
                    alert('Produto cadastrado com sucesso!');
                    window.location.href='../produtos.php';
                </script>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    
    
?>