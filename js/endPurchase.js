var pagForm = document.getElementById('inputPagamento');
var divCartao = document.getElementById('dadosCartao');

pagForm.onclick = function(){
    if(pagForm.value === 'Boleto'){
        divCartao.style.display = 'none';
    }else{
        divCartao.style.display = 'block';
    }
}
