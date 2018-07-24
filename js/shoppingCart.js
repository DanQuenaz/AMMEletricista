import * as Data from './dataCart';

//Funções página

Data.loadCart();
Data.updateCart();

$(".item_add").click(function(event){
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

    document.cookie = '1AMM-CEPX002' + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
});

$('#simpleCart_empty').on('click', function(event){
    event.preventDefault();
    Data.clearCart();
    Data.updateCart();
});



