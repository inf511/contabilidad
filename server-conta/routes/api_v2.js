const express = require("express");
const router  = express.Router();

const User = require("../models/user");
const Tabla = require("../models/csTabla");

router.get("/users", (req, res)=>{
    User.find({}, (err, users)=>{
        res.json(users);
    });
});

router.post("/users", (req, res)=>{
    // esto elimina el id por qe se genera automaticamente en mongodb
    delete req.body._id;
    console.log("json str: " + JSON.stringify(req.body));
    User.create(req.body, (err, user)=>{
        if(err){
            res.json(err);
        }else{
            res.json(user);
        }
    });
});

router.put("/users/:id", (req, res)=>{
    // esto elimina el id por qe se genera automaticamente en mongodb
    delete req.body.id;
    User.update({_id: req.params.id}, req.body, (err, user)=>{
        if(err){
            res.json(err);
        }else{
            res.json(user);
        }
    });
});

router.delete("/users/:id", (req, res)=>{
    // esto elimina el id por qe se genera automaticamente en mongodb
    User.deleteOne({_id: req.params.id}, (err, user)=>{
        if(err){
            res.json(err);
        }else{
            res.json(user);
        }
    });
});

//#################api rest de las tablas ##############################################
// lista todas las tablas
router.get("/tablas", (req, res)=>{
    Tabla.find({}, (err, tablas)=>{
        res.json(tablas);
    });
});

// guarda una tabla
router.post("/tablas", (req, res)=>{
    // esto elimina el id por qe se genera automaticamente en mongodb
    console.log("json str: " + JSON.stringify(req.body));
    req.body.fechaCreate = new Date();
    delete req.body._id;
    Tabla.create(req.body, (err, tabla)=>{
        if(err){
            console.log("error!!");
            res.json(err);
        }else{
            console.log("ok no problema");
            res.json(tabla);
        }
    });
});
//######################################################################################
module.exports = router;
