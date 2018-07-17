<?php 

    require_once "./configDB.php";

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cpf = $_POST['cpf'];
    $state = $_POST['stateName'];
    $city = $_POST['cityName'];
    $address = $_POST['address'];
    $bairro = $_POST['bairroName'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $emailConfirm = $_POST['confirmEmail'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['confirmPassword']);
    $entrar = $_POST['cadastrar'];
    
    if (isset($entrar)) {
        if($email == $emailConfirm){
            if($password == $passwordConfirm){
                $sql = "INSERT INTO `usuarios` (`usuarioId`, `primeiroNome`, `sobreNome`, `cpf`, `estado`, `cidade`, `endereco`, `bairro`, `email`, `senha`) VALUES (NULL, '".$firstName."', '".$lastName."', '".$cpf."', '".$state."', '".$city."', '".$address."', '".$bairro."', '".$email."', '".$password."');";
                if($conn->query($sql)){
                    echo"<script language='javascript' type='text/javascript'>
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