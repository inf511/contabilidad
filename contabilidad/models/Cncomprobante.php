<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cncomprobante".
 *
 * @property integer $pk_comprobante
 * @property string $cncodcomp
 * @property integer $cntcomp
 * @property string $cnnrocomp
 * @property string $cnfechacomp
 * @property integer $fkmoneda
 * @property string $cntcambio
 * @property integer $fkbanco
 * @property string $cncliente
 * @property string $cnglosa
 * @property string $cnestado
 *
 * @property Cnbanco $fkbanco0
 * @property Cnmoneda $fkmoneda0
 * @property Cndetcomprobante[] $cndetcomprobantes
 */
class Cncomprobante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cncomprobante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cntcomp', 'fkmoneda', 'cntcambio'], 'required'],
            [['cntcomp', 'fkmoneda', 'fkbanco'], 'integer'],
            [['cnfechacomp'], 'safe'],
            [['cntcambio'], 'number'],
            [['cncodcomp'], 'string', 'max' => 5],
            [['cnnrocomp'], 'string', 'max' => 15],
            [['cncliente'], 'string', 'max' => 50],
            [['cnglosa'], 'string', 'max' => 100],
            [['cnestado'], 'string', 'max' => 1],
            [['fkbanco'], 'exist', 'skipOnError' => true, 'targetClass' => Cnbanco::className(), 'targetAttribute' => ['fkbanco' => 'pk_banco']],
            [['fkmoneda'], 'exist', 'skipOnError' => true, 'targetClass' => Cnmoneda::className(), 'targetAttribute' => ['fkmoneda' => 'pk_moneda']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_comprobante' => 'Pk Comprobante',
            'cncodcomp' => 'Codigo parcial',
            'cntcomp' => 'Tipo de comprobante',
            'cnnrocomp' => 'Codigo Comprobante',
            'cnfechacomp' => 'Fecha',
            'fkmoneda' => 'Tipo de moneda',
            'cntcambio' => 'Tipo de cambio',
            'fkbanco' => 'Banco',
            'cncliente' => 'Cliente',
            'cnglosa' => 'Descripcion',
            'cnestado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkbanco0()
    {
        return $this->hasOne(Cnbanco::className(), ['pk_banco' => 'fkbanco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkmoneda0()
    {
        return $this->hasOne(Cnmoneda::className(), ['pk_moneda' => 'fkmoneda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCndetcomprobantes()
    {
        return $this->hasMany(Cndetcomprobante::className(), ['fkcomprobante' => 'pk_comprobante']);
    }
}
