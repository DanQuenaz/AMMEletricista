import * as USER from './dataUser';

USER.loadUser();

if(USER.userLoged != null){
    document.getElementById('campLogin').innerHTML = "<a href=\"loged.html\">"+ USER.getNome() +"</a>";
    document.getElementById('campRegister').innerHTML = "";
}else{
    document.getElementById('campLogin').innerHTML = "<a href=\"login.php\">Login</a>";
    document.getElementById('campRegister').innerHTML = "<a  href=\"register.html\">Cadastrar</a>";
}