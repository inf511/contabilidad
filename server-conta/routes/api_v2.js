const express = require("express");
const router  = express.Router();
const clasificador = require("../clasificadorWatson.js");

var watson = require('watson-developer-cloud');
var fs = require('fs');

router.get("/users", (req, res)=>{
    User.find({}, (err, users)=>{
        res.json(users);
    });
});

/**
 * Con este metodo vamos a ejecutar el entrenamiento
 */
router.get("/training", (req, res)=>{
    // creacion de la conexion a watson

    // esto elimina el id por qe se genera automaticamente en mongodb
    let path = __dirname + "/accountfiles/accounts.csv";
    clasificador.entrenarClasificador(watson, fs, path, res)
});

router.get("/list", (req, res)=>{
    clasificador.listarClasificadores(watson, res);
});

router.get("/information", (req, res)=>{
    // el id del nuevo clasificador id
    clasificador.getInformacion("c53147x243-nlc-312", watson, res);
});

// clasificador
router.get("/clasificar/:search", (req, res)=>{
    console.log("parametro de llegada : " + req.params.search);
    clasificador.clasificar(watson, req.params.search, "c53147x243-nlc-312", res);
});

//######################################################################################
router.get("/getboot/:message", (req, res)=>{
    console.log("messge de llegada : " + req.params.message);
    clasificador.getmessage(watson, req.params.message, res);
});
//######################################################################################
module.exports = router;