<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cndocumento;

/**
 * CnDocumentoSearch represents the model behind the search form about `app\models\CnDocumento`.
 */
class CndocumentoSearch extends Cndocumento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pk_document'], 'integer'],
            [['cndescripcion', 'cndocnota', 'cndocbreve'], 'safe'],
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
        $query = Cndocumento::find();

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
            'pk_document' => $this->pk_document,
        ]);

        $query->andFilterWhere(['like', 'cndescripcion', $this->cndescripcion])
            ->andFilterWhere(['like', 'cndocnota', $this->cndocnota])
            ->andFilterWhere(['like', 'cndocbreve', $this->cndocbreve]);

        return $dataProvider;
    }
}
