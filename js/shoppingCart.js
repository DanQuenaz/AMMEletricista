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
    
    console.log("YUUUP");

    Data.addItem(_id, _nome, _descricao, _preco, 1);

    Data.updateCart();
});

$('#simpleCart_empty').on('click', function(event){
    event.preventDefault();
    Data.clearCart();
    Data.updateCart();
});


