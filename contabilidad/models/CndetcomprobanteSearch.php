<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cndetcomprobante;

/**
 * CndetcomprobanteSearch represents the model behind the search form about `app\models\Cndetcomprobante`.
 */
class CndetcomprobanteSearch extends Cndetcomprobante
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_detcomprobante', 'fkcomprobante', 'fkcuentacontable', 'fkctacte', 'fkproyecto', 'fkdocument'], 'integer'],
            [['cndebe', 'cnhaber'], 'number'],
            [['cnnrodoc', 'cnglosadet'], 'safe'],
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
        $query = Cndetcomprobante::find();

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
            'pk_detcomprobante' => $this->pk_detcomprobante,
            'fkcomprobante' => $this->fkcomprobante,
            'fkcuentacontable' => $this->fkcuentacontable,
            'cndebe' => $this->cndebe,
            'cnhaber' => $this->cnhaber,
            'fkctacte' => $this->fkctacte,
            'fkproyecto' => $this->fkproyecto,
            'fkdocument' => $this->fkdocument,
        ]);

        $query->andFilterWhere(['like', 'cnnrodoc', $this->cnnrodoc])
            ->andFilterWhere(['like', 'cnglosadet', $this->cnglosadet]);

        return $dataProvider;
    }
}
