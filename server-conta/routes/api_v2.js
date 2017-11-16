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
    // esto elimina el id por qe se genera automaticamente en mongodb
    clasificador.getInformacion("9ddbcfx239-nlc-24401", watson, res);
});

//#################api rest de las tablas ##############################################
// lista todas las tablas
router.get("/clasificar", (req, res)=>{
    clasificador.clasificar(watson, "PAGO DE SUELDO A JUAN PERES", "9ddbcfx239-nlc-24401", res);
});

//######################################################################################
module.exports = router;
