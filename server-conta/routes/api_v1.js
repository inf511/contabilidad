// lista de acceso a la base de datos
var list = function(request, res, next)
          {
            db.steps.findDoc(1, function(err,doc){ if (err) { handleError(res) };
            console.log(doc.data);
            res.json({ data: doc.data }); });
}

// actualiza el obejto en la base de datos.
var update = function(request, res, next) {
          var newDoc = request.body.data;
          db.steps.saveDoc({id:1,data:newDoc},
                  function(err,response){
                          if (err){
                            handleError(res);
                          };
                          console.log(response);
                          res.json({ data: response });
                        });
          }
