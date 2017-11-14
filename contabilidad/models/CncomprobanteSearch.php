<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cncomprobante;

/**
 * CncomprobanteSearch represents the model behind the search form about `app\models\Cncomprobante`.
 */
class CncomprobanteSearch extends Cncomprobante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_comprobante', 'cntcomp', 'fkmoneda', 'fkbanco'], 'integer'],
            [['cncodcomp', 'cnnrocomp', 'cnfechacomp', 'cncliente', 'cnglosa', 'cnestado'], 'safe'],
            [['cntcambio'], 'number'],
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
        $query = Cncomprobante::find();

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
            'pk_comprobante' => $this->pk_comprobante,
            'cntcomp' => $this->cntcomp,
            'cnfechacomp' => $this->cnfechacomp,
            'fkmoneda' => $this->fkmoneda,
            'cntcambio' => $this->cntcambio,
            'fkbanco' => $this->fkbanco,
        ]);

        $query->andFilterWhere(['like', 'cncodcomp', $this->cncodcomp])
            ->andFilterWhere(['like', 'cnnrocomp', $this->cnnrocomp])
            ->andFilterWhere(['like', 'cncliente', $this->cncliente])
            ->andFilterWhere(['like', 'cnglosa', $this->cnglosa])
            ->andFilterWhere(['like', 'cnestado', $this->cnestado]);

        return $dataProvider;
    }
}
