import * as USER from './dataUser';

USER.loadUser();

if(USER.userLoged != null){
    document.getElementById('campLogin').innerHTML = "<a href=\"loged.php\">"+ USER.getNome() +"</a>";
    document.getElementById('campRegister').innerHTML = "<a href='#' id='clickExit'>Sair</a>";
}else{
    document.getElementById('campLogin').innerHTML = "<a href=\"login.php\">Login</a>";
    document.getElementById('campRegister').innerHTML = "<a  href=\"register.html\">Cadastrar</a>";
}

document.getElementById('clickExit').onclick = function(){
    USER.deleteUser();
    document.cookie = '1AMM-CV002' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    window.location.href='../index.html';
}