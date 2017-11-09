<?php

namespace app\models;

use Yii;

// este es un cambio realizado por limbert para demostrar el pull

/**
 * This is the model class for table "cnmoneda".
 *
 * @property integer $pk_moneda
 * @property string $cnsimbolo
 * @property string $cndescripcion
 */
class Cnmoneda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnmoneda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cnsimbolo'], 'string', 'max' => 15],
            [['cndescripcion'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_moneda' => 'Pk Moneda',
            'cnsimbolo' => 'Cnsimbolo',
            'cndescripcion' => 'Cndescripcion',
        ];
    }
}
