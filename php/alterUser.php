<?php 

    require_once "./configDB.php";

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
    $password = $_POST['password'];
    $passwordConfirm = $_POST['confirmPassword'];
    $entrar = $_POST['alterar'];
    
    if (isset($entrar)) {
        if( isset($_COOKIE["1AMM-CV002"]) ){
            $dados = explode(",", $_COOKIE["1AMM-CV002"]);
            if($email == $emailConfirm){
                if($password == $passwordConfirm){
                    if($password != "-1-1-1-1-1-"){
                        $sql = "UPDATE usuarios
                        SET primeiroNome='".$firstName."', sobreNome='".$lastName."', cpf='".$cpf."', estado='".$state."', cidade='".$city."', endereco='".$address."', numero='".$number."', bairro='".$bairro."', email='".$email."', senha='".md5($password)."', telefone='".$tel."', nomeCompleto='".$firstName." ".$lastName."', cep='".$cep."'
                        WHERE usuarioId = ".$dados[1].";";
                    }else{
                        $sql = "UPDATE usuarios
                        SET primeiroNome='".$firstName."', sobreNome='".$lastName."', cpf='".$cpf."', estado='".$state."', cidade='".$city."', endereco='".$address."', numero='".$number."', bairro='".$bairro."', email='".$email."', telefone='".$tel."', nomeCompleto='".$firstName." ".$lastName."', cep='".$cep."'
                        WHERE usuarioId = ".$dados[1].";";
                    }
                    
                    if($conn->query($sql)){
                        echo"<script language='javascript' type='text/javascript'>

                            var cname = '1AMM-CV002';
                            var cvalue = '".$firstName.",".$dados[1]."';
                            var d = new Date();
                            d.setTime(d.getTime() + (60*60*1000));
                            var expires = 'expires='+ d.toUTCString();
                            document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';

                            window.location.href='../loged.php';
                        </script>";
                    }else{
                        echo "ERRO NO SQL";
                    }
                }else{
                    echo"<script language='javascript' type='text/javascript'>
                        alert('Senhas não conferem!');
                        window.location.href='../alterUser.php';
                    </script>";
                }
            }else{
                echo"<script language='javascript' type='text/javascript'>
                    alert('Emails não conferem!".$email."".$emailConfirm."');
                    window.location.href='../alterUser.php';
                </script>";
            }

        }else{

        }
        
    }
?>