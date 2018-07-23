<?php 

    require_once "./conectDB.php";

    $email = $_POST['inputEmail'];
    $senha = $_POST['inputPassword'];
    $entrar = $_POST['inputLogin'];
    
    if (isset($entrar)) {
            
        $sql = "SELECT * FROM usuariosadm WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows <= 0){
            echo"<script language='javascript' type='text/javascript'>
                alert('Login ou senha inválido!');
                window.location.href='../index.php';
            </script>";
            die();
        }else{
            $row = $result->fetch_assoc();
            echo"<script language='javascript' type='text/javascript'>
                var cname = \"0AMM-LG000\";
                var cvalue = ".$row["usuarioadmId"].";
                var d = new Date();
                d.setTime(d.getTime() + (60*60*1000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.location.href='../pedidos.php';
            </script>";
            //header("Location:../index.php");
        }
    }
?>