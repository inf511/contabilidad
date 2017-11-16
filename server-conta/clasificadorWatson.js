/**
    {
        "url": "https://gateway.watsonplatform.net/natural-language-classifier/api",
        "username": "e9a1b2e8-bf4f-478b-ae67-763528dc1ddb",
        "password": "1LcR6rEyodjH"
    }
 */
/**
 * Metodo que autentifica a la api de watson
 */
function autenticar(watson){
    let clasificador = watson.natural_language_classifier({
        username: 'e9a1b2e8-bf4f-478b-ae67-763528dc1ddb',
        password: '1LcR6rEyodjH',
        version: 'v1'
    });
    return clasificador;
}
function entrenarClasificador(watson, fileSystem, path, respuesta){
    
    let clasificador = autenticar(watson);
    
    let parameters = {
        language: 'es',
        name: 'Clasificador-contable',
        training_data: fileSystem.createReadStream(path)
    }

    clasificador.create(parameters, (error, response)=>{
        if(error){
            console.log("Error : " + error);
            respuesta.json(error);
        }else{
            console.log(JSON.stringify(response, null, 2));
            respuesta.json(response);
        }
    })
}
/**
 * Metodo que lista todos los clasificadores que tenemos listo para usar
 * de aqui debemos de obtener el id del clasificador
 */
function listarClasificadores(watson, respuesta){
    let clasificador = autenticar(watson);
    clasificador.list({}, (err, response)=>{
          if (err){
            console.log('error en listar : ', err);
            respuesta.json(err);
          }else{
            console.log(JSON.stringify(response, null, 2));
            respuesta.json(response);
          }              
      });
}
/**
 * Metodo que obtiene la informacion de los clasificadores
 * los que tengan status "Available" pueden usarse para clasificarse
 * @param {*} idClasificador Identificador del clasificador 
 * @param {*} watson Api de conexion a watson
 */
function getInformacion(idClasificador, watson, respuesta){
    let clasificador = autenticar(watson);
    clasificador.status({
        classifier_id: idClasificador },
        (err, response)=>{
          if (err){
            console.log('error information :', err);
            respuesta.json(err);
          }else{
            console.log(JSON.stringify(response, null, 2));
            respuesta.json(response);
          }
      });
}
function clasificar(watson, texto, idClasificador, respuesta){
    let clasificador = autenticar(watson);
    clasificador.classify({
        text: texto,
        classifier_id: idClasificador },
        (err, response)=>{
          if (err){
            console.log('error al clasificar : ', err);
            respuesta.json(err);
          }else{
            console.log(JSON.stringify(response, null, 2));
            respuesta.json(response);
          }
      });
}
module.exports.entrenarClasificador = entrenarClasificador;
module.exports.listarClasificadores = listarClasificadores;
module.exports.getInformacion = getInformacion;
module.exports.clasificar = clasificar;