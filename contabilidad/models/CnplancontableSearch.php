<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnplancontable;

/**
 * CnplancontableSearch represents the model behind the search form about `app\models\Cnplancontable`.
 */
class CnplancontableSearch extends Cnplancontable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_plancontable', 'fkmoneda', 'cnnivel', 'cncuentapadre'], 'integer'],
            [['cncuentacontable', 'cndescripcion', 'cnctachica', 'cnctacte', 'cnctaflujo', 'cnctapresu', 'cnestado'], 'safe'],
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
        $query = Cnplancontable::find();

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
            'pk_plancontable' => $this->pk_plancontable,
            'fkmoneda' => $this->fkmoneda,
            'cnnivel' => $this->cnnivel,
            'cncuentapadre' => $this->cncuentapadre,
        ]);

        $query->andFilterWhere(['like', 'cncuentacontable', $this->cncuentacontable])
            ->andFilterWhere(['like', 'cndescripcion', $this->cndescripcion])
            ->andFilterWhere(['like', 'cnctachica', $this->cnctachica])
            ->andFilterWhere(['like', 'cnctacte', $this->cnctacte])
            ->andFilterWhere(['like', 'cnctaflujo', $this->cnctaflujo])
            ->andFilterWhere(['like', 'cnctapresu', $this->cnctapresu])
            ->andFilterWhere(['like', 'cnestado', $this->cnestado]);

        return $dataProvider;
    }
}
