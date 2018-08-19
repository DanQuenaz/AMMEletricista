var areaRastreio = document.getElementById('cdgRast');
var statusForm = document.getElementById('inputAtlzStatus');


statusForm.onclick = function(){
    if(statusForm.value === 'Aguardando para envio'){
        areaRastreio.style.display = 'none';
        document.getElementById('inputRastreio').required=false;
    }else{
        areaRastreio.style.display = 'block';
        document.getElementById('inputRastreio').required=true;
    }
}