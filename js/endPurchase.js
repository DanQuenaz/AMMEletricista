// var pagForm = document.getElementById('inputPagamento');
// var divCartao = document.getElementById('dadosCartao');
var useDataUser = document.getElementById('useAdress');

var _dadosCep= getCookie('1AMM-CEPX002').split("_");

document.getElementById('inputCEP').value = _dadosCep[0];

// pagForm.onclick = function(){
//     if(pagForm.value === 'Boleto'){
//         divCartao.style.display = 'none';
//         document.getElementById('inputCardNumber').required=false;
//         document.getElementById('inputCardName').required=false;
//         document.getElementById('inputExpireDate').required=false;
//         document.getElementById('inputCV').required=false;
//     }else{
//         divCartao.style.display = 'block';
//         document.getElementById('inputCardNumber').required=true;
//         document.getElementById('inputCardName').required=true;
//         document.getElementById('inputExpireDate').required=true;
//         document.getElementById('inputCV').required=true;
//     }
// }

useDataUser.onclick = function(){
    var dataUser = JSON.parse( getCookie('1AMM-AX_DATAUSER_') );
    if(_dadosCep[0] == dataUser['cep']){
        document.getElementById('inputEndereco').value = dataUser['endereco'];
        document.getElementById('inputBairro').value = dataUser['bairro'];
        document.getElementById('inputCidade').value = dataUser['cidade'];
        document.getElementById('inputEstado').value = dataUser['estado'];
    }else{
        alert("O CEP da sua conta é diferente do CEP utilizado para cálculo do frete!");
    }
    
    
    //document.getElementById('inputCpfPagante').value = dataUser['cpf'];

}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
