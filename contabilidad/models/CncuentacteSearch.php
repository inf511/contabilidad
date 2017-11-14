<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cncuentacte;

/**
 * CncuentacteSearch represents the model behind the search form about `app\models\Cncuentacte`.
 */
class CncuentacteSearch extends Cncuentacte
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_cuentacte'], 'integer'],
            [['cncodigo', 'cnnombre', 'cndireccion', 'cntelefono', 'cntelefax', 'cnnit', 'cncontacto', 'cnestado'], 'safe'],
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
        $query = Cncuentacte::find();

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
            'pk_cuentacte' => $this->pk_cuentacte,
        ]);

        $query->andFilterWhere(['like', 'cncodigo', $this->cncodigo])
            ->andFilterWhere(['like', 'cnnombre', $this->cnnombre])
            ->andFilterWhere(['like', 'cndireccion', $this->cndireccion])
            ->andFilterWhere(['like', 'cntelefono', $this->cntelefono])
            ->andFilterWhere(['like', 'cntelefax', $this->cntelefax])
            ->andFilterWhere(['like', 'cnnit', $this->cnnit])
            ->andFilterWhere(['like', 'cncontacto', $this->cncontacto])
            ->andFilterWhere(['like', 'cnestado', $this->cnestado]);

        return $dataProvider;
    }
}
