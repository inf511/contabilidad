function iniciarServidorWebSocket(io){
    
    io.on("connection", (socket)=>{
        console.log("usuario acaba de conectarse");
    
        //Esperando mensajes de entrada a grupo
        socket.on("JOIN", (data)=>{
            let tr = JSON.parse(data);
            socket.join(tr.proyecto);
            // ahora envio un mensaje a los demas amigos del proyecto
            sendMessage(io, tr.proyecto, "NEW-MESSAGE", t)
        });
        // llegan messages del chat al servidor
        socket.on("MESSAGE", (data)=>{
            let tr = JSON.parse(data);            
            sendMessage(io, tr.proyecto, "TRAMA", t);
        });
    });
}

function sendMessage(io, proyecto, tipoTrama, paquete){
    //io.sockets.in(proyecto).emit(tipoTrama, JSON.stringify(paquete));
}

module.exports.iniciarServidorWebSocket = iniciarServidorWebSocket;