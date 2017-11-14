<?php
  namespace app\commands;
  use Yii;
  use yii\console\Controller;
  use toriphes\console\Runner;
  class GenerarController extends Controller
  {
    public function actionIndex()
    {
       //Obtengo conexion a la db
       $connection = Yii::$app->db;
       $dbSchema = $connection->schema;
       //Obtengo todas los nombres de las tablas
       $tables = $dbSchema->getTableNames();
     //Recorro las tablas
     foreach($tables as $tbl)
     {
       //Coloco la primera letra de el nombre de la tabla en mayúscula
       $nombre= ucfirst ($tbl);
       //Instancio la clase
       $runner = new Runner();
       //Creo el modelo
       $runner->run('gii/model --tableName='.$tbl.' --modelClass='.$nombre, $salida);
       echo $salida;
       //Creo el ABM
       $runner->run('gii/crud --enableI18N=1 --modelClass="app\models\\'.$nombre.'" --controllerClass="app\controllers\\'.$nombre.'Controller"',$salida);
       echo $salida;
     }
    }
  }

  ?>
