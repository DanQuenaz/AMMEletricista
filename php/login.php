<?php 

    require_once "./configDB.php";

    $login = $_POST['loginEmail'];
    $entrar = $_POST['subimit'];
    $senha = md5($_POST['loginPassword']);
    
    if (isset($entrar)) {
            
        $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows <= 0){
            echo"<script language='javascript' type='text/javascript'>
                alert('Login ou senha inválido!');
                window.location.href='../login.php';
            </script>";
            die();
        }else{
            $row = $result->fetch_assoc();
            echo"<script language='javascript' type='module'>
                import * as USER from '../js/dataUser';
                USER.addUser('".$row['usuarioId']."', '".$row['primeiroNome']."', '".$row['email']."', '".$row['endereco']."');
                window.location.href='../index.html';
            </script>";
            //header("Location:../index.html");
        }
    }
?>