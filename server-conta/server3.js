/// usara websocket para la conexiones

const express = require("express");
const app = express();
const server = require("http").Server(app);

const path = require('path');
const bodyParser = require("body-parser");
const morgan = require("morgan");
const cors = require("cors");
const apiRouter = require("./routes/api_v2");

// el web socket
const io = require("socket.io")(server);
const websocket = require("./websocket");

// creamos un midleaware para servir la pagina desde el servidor
app.use(cors());
app.use(morgan("dev"));
app.use(bodyParser.json());

// aqui llamamos a las rutas api
app.use('/api', apiRouter);
// mostramos las paginas staticas
app.use(express.static(path.join(__dirname, '/public/dist')))

websocket.iniciarServidorWebSocket(io);

// iniciamos el servidor en el puerto 3000
server.listen(3000, ()=>{
    console.log("server on port 3000");
});
