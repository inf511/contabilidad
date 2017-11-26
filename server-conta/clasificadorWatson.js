/**
{ es el de ronald
  "url": "https://gateway.watsonplatform.net/natural-language-classifier/api",
  "username": "bf57b245-4a3e-4a2a-9f0d-b0892fa146e4",
  "password": "llWVQk6qOwuE"
}
 */
/**
 * Metodo que autentifica a la api de watson
 */
function autenticar(watson){
    let clasificador = watson.natural_language_classifier({
        username: 'bf57b245-4a3e-4a2a-9f0d-b0892fa146e4',
        password: 'llWVQk6qOwuE',
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
/**
 * 
 * @param {Api de watson} watson 
 * @param {Texto a clasificar} texto 
 * @param {Id del clasificador} idClasificador 
 * @param {respuesta del servidor} respuesta 
 */
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
function getmessage(watson, msg, respuesta){
    let conversation = watson.conversation({
        username: '3b0144aa-d46e-45ff-a5d3-7064c969bdfb',
        password: 'ytoYv7muq34l',
        version: 'v1',
        version_date: '2017-05-26'
    });

    conversation.message({
    workspace_id: '7230d8b3-9b1a-4cf6-a661-667fd2663ed2', // el id de ronald
    input: {'text': msg}
    },  (err, response)=>{
        if (err){
            console.log('error:', err);
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
module.exports.getmessage = getmessage;