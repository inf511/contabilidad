<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnproyecto".
 *
 * @property integer $pk_proyecto
 * @property string $cnnombre
 * @property string $cncodigo
 * @property string $cnclave
 * @property string $cnglosa
 * @property string $cnbreve
 * @property integer $fkctacosto
 * @property string $cnestado
 *
 * @property Cnplancontable $fkctacosto0
 */
class Cnproyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnproyecto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkctacosto', 'cnestado'], 'required'],
            [['fkctacosto'], 'integer'],
            [['cnnombre', 'cnglosa'], 'string', 'max' => 50],
            [['cncodigo'], 'string', 'max' => 6],
            [['cnclave'], 'string', 'max' => 25],
            [['cnbreve'], 'string', 'max' => 15],
            [['cnestado'], 'string', 'max' => 1],
            [['fkctacosto'], 'exist', 'skipOnError' => true, 'targetClass' => Cnplancontable::className(), 'targetAttribute' => ['fkctacosto' => 'pk_plancontable']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_proyecto' => 'Proyecto',
            'cnnombre' => 'Nombre',
            'cncodigo' => 'Codigo',
            'cnclave' => 'Clave',
            'cnglosa' => 'Glosa',
            'cnbreve' => 'Breve',
            'fkctacosto' => 'Cuenta Costo',
            'cnestado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkctacosto0()
    {
        return $this->hasOne(Cnplancontable::className(), ['pk_plancontable' => 'fkctacosto']);
    }
}
