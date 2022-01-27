var btnEnviar = document.querySelector('#enviar');
var formulario = document.getElementById('formulario');

btnEnviar.addEventListener('click',function(e){
   

    e.preventDefault();
    setFormulario();
});

function setFormulario(){
    var infoData = new FormData(formulario);
    //console.log(...infoData);
    var xhr = new XMLHttpRequest();
    xhr.open('POST','guardar.php',true);
    xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            var json = JSON.parse(response);
            if(json.status == 'empty'){
                document.getElementById('modal').innerHTML = json.message
            }else if(json.status == 'success'){
                document.getElementById('modal').innerHTML = json.message                
                document.getElementById('formulario').style.display = 'none';
                
            }
        }
    }
    xhr.send(infoData);
}

