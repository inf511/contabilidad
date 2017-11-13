<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnbanco;

/**
 * CnbancoSearch represents the model behind the search form about `app\models\Cnbanco`.
 */
class CnbancoSearch extends Cnbanco
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_banco'], 'integer'],
            [['cncodigo', 'cnnombre', 'cndireccion', 'cnobservacion'], 'safe'],
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
        $query = Cnbanco::find();

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
            'pk_banco' => $this->pk_banco,
        ]);

        $query->andFilterWhere(['like', 'cncodigo', $this->cncodigo])
            ->andFilterWhere(['like', 'cnnombre', $this->cnnombre])
            ->andFilterWhere(['like', 'cndireccion', $this->cndireccion])
            ->andFilterWhere(['like', 'cnobservacion', $this->cnobservacion]);

        return $dataProvider;
    }
}
