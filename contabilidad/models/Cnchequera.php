<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnchequera".
 *
 * @property integer $pk_chequera
 * @property integer $fkbanco
 * @property integer $fkcuentacontable
 * @property string $cndescripcion
 * @property string $cnnroinicio
 * @property string $cnnrofin
 * @property string $cnhabilitar
 * @property string $cnestado
 *
 * @property Cnplancontable $fkcuentacontable0
 */
class Cnchequera extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnchequera';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkbanco', 'fkcuentacontable', 'cnnroinicio', 'cnnrofin', 'cnhabilitar', 'cnestado'], 'required'],
            [['fkbanco', 'fkcuentacontable'], 'integer'],
            [['cndescripcion'], 'string', 'max' => 50],
            [['cnnroinicio', 'cnnrofin'], 'string', 'max' => 20],
            [['cnhabilitar', 'cnestado'], 'string', 'max' => 1],
            [['fkcuentacontable'], 'exist', 'skipOnError' => true, 'targetClass' => Cnplancontable::className(), 'targetAttribute' => ['fkcuentacontable' => 'pk_plancontable']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_chequera' => 'Chequera',
            'fkbanco' => 'Banco',
            'fkcuentacontable' => 'Cuenta Contable',
            'cndescripcion' => 'Descripcion',
            'cnnroinicio' => 'Nro inicio',
            'cnnrofin' => 'Nro fin',
            'cnhabilitar' => 'Habilitar',
            'cnestado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkcuentacontable0()
    {
        return $this->hasOne(Cnplancontable::className(), ['pk_plancontable' => 'fkcuentacontable']);
    }
}
