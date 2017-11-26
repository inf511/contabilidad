//let ip ="192.168.43.126"
let ip ="localhost"
function getClasificador(){

    let value = $("#iddescripcion").val();
    
    let url = encodeURI("http://"+ip+":3000/api/clasificar/" + value);

    if((value.length)>5){
      $.get(url, 
        function(data){
            let data1 = JSON.stringify(data);
            let dataJson = JSON.parse(data1);            
            $("#resultado").val(dataJson.top_class);
            //console.log("clasificador : " + JSON.stringify(data));
            actualizarTabla(dataJson.classes);
      })  
    }else{
        alert("Ingrese minimo una palabra mayor a 5 caracteres!");
    }
}
function actualizarTabla(clases){
    let i = 0;
    clases.forEach(element => {
        if(i==0){
            $('#idtabla').append('<tr><th align="center">NRO</th><th align="center">CUENTA CONTABLE</th><th align="center">CONFIANZA</th></tr>');
        }
        i = i+1;
        $('#idtabla').append('<tr><td align="center" >' + i + '</td><td align="center">' + element.class_name + ' </td><td align="center">' + (Math.round(element.confidence * 100) / 100).toString() + '</td></tr>');
    });
}
/**
 * Metodo que envia un mensaje al boot
 */
function chat_sendMessage(){
    let value = $("#message").val();
    
    let url = encodeURI("http://" + ip + ":3000/api/getboot/" + value);
    
    if(value.length > 0){
        $.get(url, 
            function(data){
                let data1 = JSON.stringify(data);
                let dataJson = JSON.parse(data1);

                out = dataJson.output;
                let text = $("#chat").val();
                if(text.length <=0)
                    $("#chat").val(
                        "usr : " + value + "\n"
                        + "boot: " + out.text);                
                else
                    $("#chat").val(text + "\n" 
                                + "usr : " + value + "\n"
                                + "boot: " + out.text);
          });
    }else{
        alert("Por favor ingrese una frase");
    }
}