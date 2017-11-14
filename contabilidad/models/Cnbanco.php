<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnbanco".
 *
 * @property integer $pk_banco
 * @property string $cncodigo
 * @property string $cnnombre
 * @property string $cndireccion
 * @property string $cnobservacion
 */
class Cnbanco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnbanco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cncodigo'], 'required'],
            [['cncodigo'], 'string', 'max' => 4],
            [['cnnombre', 'cndireccion', 'cnobservacion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_banco' => 'Banco',
            'cncodigo' => 'Codigo',
            'cnnombre' => 'Nombre',
            'cndireccion' => 'Direccion',
            'cnobservacion' => 'Observacion',
        ];
    }
	
	
	
	
	
}
