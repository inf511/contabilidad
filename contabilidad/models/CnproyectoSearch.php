<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnproyecto;

/**
 * CnProyectoSearch represents the model behind the search form about `app\models\CnProyecto`.
 */
class CnProyectoSearch extends Cnproyecto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_proyecto', 'fkctacosto'], 'integer'],
            [['cnnombre', 'cncodigo', 'cnclave', 'cnglosa', 'cnbreve', 'cnestado'], 'safe'],
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
        $query = Cnproyecto::find();

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
            'pk_proyecto' => $this->pk_proyecto,
            'fkctacosto' => $this->fkctacosto,
        ]);

        $query->andFilterWhere(['like', 'cnnombre', $this->cnnombre])
            ->andFilterWhere(['like', 'cncodigo', $this->cncodigo])
            ->andFilterWhere(['like', 'cnclave', $this->cnclave])
            ->andFilterWhere(['like', 'cnglosa', $this->cnglosa])
            ->andFilterWhere(['like', 'cnbreve', $this->cnbreve])
            ->andFilterWhere(['like', 'cnestado', $this->cnestado]);

        return $dataProvider;
    }
}
