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

            $dataUser = array();

            $dataUser['nome'] = $row['nomeCompleto'];
            $dataUser['cpf'] = $row['cpf'];
            $dataUser['endereco'] = $row['endereco'];
            $dataUser['numero'] = $row['numero'];
            $dataUser['bairro'] = $row['bairro'];
            $dataUser['cidade'] = $row['cidade'];
            $dataUser['estado'] = $row['estado'];
            $dataUser['cep'] = $row['cep'];
            $dataUser['telefone'] = $row['telefone'];
            $dataUser['email'] = $row['email'];
            
            echo"<script language='javascript' type='module'>

                var cname = '1AMM-CV002';
                var cvalue = '".$row["primeiroNome"].",".$row['usuarioId']."';
                var d = new Date();
                d.setTime(d.getTime() + (60*60*1000));
                var expires = 'expires='+ d.toUTCString();
                document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

                var cname = '1AMM-AX_DATAUSER_';
                var cvalue = '".(string)json_encode($dataUser)."';
                var d = new Date();
                d.setTime(d.getTime() + (60*60*1000));
                var expires = 'expires='+ d.toUTCString();
                document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

                window.location.href='../index.php';
            </script>";
            //header("Location:../index.php");
        }
    }
?>