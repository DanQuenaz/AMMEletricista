import * as Data from './dataCart.js';

//Funções página

Data.loadCart();
Data.updateCart();
//item_add
$(".btn-block").click(function(event){
    event.preventDefault();
    var _id = $(this).attr("data-id");
    var _nome = $(this).attr("data-name");
    var _descricao = $(this).attr("data-description");
    var _preco = Number( $(this).attr("data-price") );
    var _imagem = $(this).attr("data-imagem");
    var _peso = $(this).attr("data-peso");
    var _altura = $(this).attr("data-altura");
    var _largura = $(this).attr("data-largura");
    var _comprimento = $(this).attr("data-comprimento");

    Data.addItem(_id, _nome, _descricao, _preco, 1, _imagem, _peso, _altura, _largura, _comprimento);

    Data.updateCart();

    delete_cookie('1AMM-CEPX002', '/', 'localhost');
});

$('#simpleCart_empty').on('click', function(event){
    event.preventDefault();
    Data.clearCart();
    Data.updateCart();
});

function delete_cookie( name, path, domain ) {
    if( getCookie( name != null) ) {
        console.log('DELETA CARAI');
        document.cookie = name + "=" + ((path) ? ";path="+path:"")+ ((domain)?";domain="+domain:"") + ";expires=Thu, 01 Jan 1970 00:00:01 GMT";
    }
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
    return null;
}



