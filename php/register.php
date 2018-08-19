<?php 

    require_once "./configDB.php";
    require_once "./configEmail.php"
    

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cpf = $_POST['cpf'];
    $state = $_POST['stateName'];
    $city = $_POST['cityName'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $bairro = $_POST['bairroName'];
    $cep = $_POST['cep'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $emailConfirm = $_POST['confirmEmail'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['confirmPassword']);
    $entrar = $_POST['cadastrar'];

    $sql0 = "SELECT `AUTO_INCREMENT`
    FROM  INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = 'ammeletricista'
    AND   TABLE_NAME   = 'pedidos';";

    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();
    $userID = $row0['AUTO_INCREMENT'];
    
    
    if (isset($entrar)) {
        if($email == $emailConfirm){
            if($password == $passwordConfirm){
                $sql = "INSERT INTO `usuarios` (`usuarioId`, `primeiroNome`, `sobreNome`, `cpf`, `estado`, `cidade`, `endereco`, `numero`, `bairro`, `email`, `senha`, `telefone`, `nomeCompleto`, `cep`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$cpf."', '".$state."', '".$city."', '".$address."', '".$number."', '".$bairro."', '".$email."', '".$password."', '".$tel."', '".$firstName." ".$lastName."', '".$cep."');";
                if($conn->query($sql)){
                    $sender = "contas@ammeletricistas.com.br"
                    $subject = "Confirmação de Email"
                    $body = "<h2>Prezado ".$firstName."</h2><br><br>".
                            "<h4>Sua conta foi criada com sucesso!</h4><br>".
                            "<h4>Click no link para ativar sua conta: <a href='https://www.ammeletricistas.com.br'>Ativar conta</a></h4>";
                    sendEmail($sender, $receiver, $firstName, $subject, $body, "https://www.ammeletricistas.com.br" );
                    echo"<script language='javascript' type='text/javascript'>
                        alert('Conta criada com sucesso! Um email de verificação foi enviado, verifique su caixa de entrada e também seu spam!');
                        window.location.href='../login.php';
                    </script>";
                }
            }else{
                echo"<script language='javascript' type='text/javascript'>
                    alert('Senhas não conferem!');
                    window.location.href='../register.php';
                </script>";
            }
        }else{
            echo"<script language='javascript' type='text/javascript'>
                alert('Emails não conferem!".$email."".$emailConfirm."');
                window.location.href='../register.php';
            </script>";
        }
    }
?>