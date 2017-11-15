const constante = require("./models/constantes");
const Trama = require("./models/Trama.js");

function iniciarServidorWebSocket(io){
    
    io.on("connection", (socket)=>{
        console.log("usuario acaba de conectarse");
    
        //Esperando mensajes de entrada a grupo
        socket.on(constante.TipoTrama_JOIN, (data)=>{            
            let tr = JSON.parse(data);
            socket.join(tr.proyecto);
            // ahora envio un mensaje a los demas amigos del proyecto
            let t = new Trama(constante.TipoTrama_NEW_MESSAGE, "Acaba de unirse : " + tr.username , tr.proyecto, tr.username);
            sendMessage(io, tr.proyecto, constante.TipoTrama_NEW_MESSAGE, t)
        });
        // llegan messages del chat al servidor
        socket.on(constante.TipoTrama_MESSAGE, (data)=>{
            let tr = JSON.parse(data);
            let t = new Trama(constante.TipoTrama_NEW_MESSAGE, tr.username + " : " + tr.message , tr.proyecto, tr.username);
            sendMessage(io, tr.proyecto, constante.TipoTrama_NEW_MESSAGE, t);
        });
    });
}

function sendMessage(io, proyecto, tipoTrama, paquete){
    io.sockets.in(proyecto).emit(tipoTrama, JSON.stringify(paquete));
}

module.exports.iniciarServidorWebSocket = iniciarServidorWebSocket;