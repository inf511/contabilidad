<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cnusuario;

/**
 * CnusuarioSearch represents the model behind the search form about `app\models\Cnusuario`.
 */
class CnusuarioSearch extends Cnusuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkusuario', 'fkgrupo'], 'integer'],
            [['nickname', 'nombrecompleto', 'apellidocompleto', 'password', 'estado', 'email', 'authkey', 'accesstoken'], 'safe'],
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
        $query = Cnusuario::find();

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
            'pkusuario' => $this->pkusuario,
            'fkgrupo' => $this->fkgrupo,
        ]);

        $query->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'nombrecompleto', $this->nombrecompleto])
            ->andFilterWhere(['like', 'apellidocompleto', $this->apellidocompleto])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'authkey', $this->authkey])
            ->andFilterWhere(['like', 'accesstoken', $this->accesstoken]);

        return $dataProvider;
    }
}
