<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnchequera;

/**
 * CnchequeraSearch represents the model behind the search form about `app\models\Cnchequera`.
 */
class CnchequeraSearch extends Cnchequera
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_chequera', 'fkbanco', 'fkcuentacontable'], 'integer'],
            [['cndescripcion', 'cnnroinicio', 'cnnrofin', 'cnhabilitar', 'cnestado'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cnchequera::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pk_chequera' => $this->pk_chequera,
            'fkbanco' => $this->fkbanco,
            'fkcuentacontable' => $this->fkcuentacontable,
        ]);

        $query->andFilterWhere(['like', 'cndescripcion', $this->cndescripcion])
            ->andFilterWhere(['like', 'cnnroinicio', $this->cnnroinicio])
            ->andFilterWhere(['like', 'cnnrofin', $this->cnnrofin])
            ->andFilterWhere(['like', 'cnhabilitar', $this->cnhabilitar])
            ->andFilterWhere(['like', 'cnestado', $this->cnestado]);

        return $dataProvider;
    }
}
