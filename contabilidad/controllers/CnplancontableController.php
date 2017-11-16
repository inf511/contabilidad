<?php

namespace app\controllers;

use Yii;
use app\models\Cnplancontable;
use app\models\CnplancontableSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CnplancontableController implements the CRUD actions for Cnplancontable model.
 */
class CnplancontableController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cnplancontable models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CnplancontableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /** 
     * Metodo que genera un archivo csv para subir al sistema de watson
     */
    public function actionGeneratecsv()
    {
        $cuentas = Cnplancontable::find()->all();
        $this->createFile($cuentas);
        return $this->redirect(['index']);
    }
    public function createFile($cuentas){
        Yii::warning("url webrot : " . Yii::getAlias('@webroot'));

        $path = Yii::getAlias('@webroot') . "/csvfiles/accounts.csv";
        
        $saltoLinea = "\n";
        $gestor = fopen($path, "w");        
        foreach ($cuentas as $cuenta) {
            $listTag = explode(",", $cuenta->tag);
            foreach($listTag as $tag){
                if(strlen($tag) > 0)
                    fwrite($gestor, trim($tag) . ", " . trim($cuenta->cncuentacontable) . $saltoLinea);
            }            
        }
        fclose($gestor);
    }

    /**
     * Displays a single Cnplancontable model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cnplancontable model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cnplancontable();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pk_plancontable]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cnplancontable model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pk_plancontable]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cnplancontable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cnplancontable model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cnplancontable the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cnplancontable::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
