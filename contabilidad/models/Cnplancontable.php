<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnplancontable".
 *
 * @property integer $pk_plancontable
 * @property string $cncuentacontable
 * @property string $cndescripcion
 * @property integer $fkmoneda
 * @property integer $cnnivel
 * @property string $cnctachica
 * @property string $cnctacte
 * @property string $cnctaflujo
 * @property string $cnctapresu
 * @property string $cnestado
 * @property integer $cncuentapadre
 * @property string $tag
 *
 * @property Cnchequera[] $cnchequeras
 * @property Cnmoneda $fkmoneda0
 * @property Cnproyecto[] $cnproyectos
 */
class Cnplancontable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnplancontable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cncuentacontable', 'fkmoneda', 'cnnivel', 'cnestado'], 'required'],
            [['fkmoneda', 'cnnivel', 'cncuentapadre'], 'integer'],
            [['cncuentacontable'], 'string', 'max' => 13],
            [['cndescripcion'], 'string', 'max' => 50],
            [['tag'], 'string', 'max' => 100],
            [['cnctachica', 'cnctacte', 'cnctaflujo', 'cnctapresu', 'cnestado'], 'string', 'max' => 1],
            [['fkmoneda'], 'exist', 'skipOnError' => true, 'targetClass' => Cnmoneda::className(), 'targetAttribute' => ['fkmoneda' => 'pk_moneda']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_plancontable' => 'Plan Contable',
            'cncuentacontable' => 'Cuenta Contable',
            'cndescripcion' => 'Descripcion',
            'fkmoneda' => 'Tipo de moneda',
            'cnnivel' => 'Nivel',
            'cnctachica' => 'Cuenta con caja chica',
            'cnctacte' => 'Cuenta con Analitica',
            'cnctaflujo' => 'Cuenta flujo',
            'cnctapresu' => 'Cuenta presupuesto',
            'cnestado' => 'Estado',
            'cncuentapadre' => 'Cuenta Contable padre',
            'tag' => 'Oraciones o palabras separadas por comas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnchequeras()
    {
        return $this->hasMany(Cnchequera::className(), ['fkcuentacontable' => 'pk_plancontable']);
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
    public function getCnproyectos()
    {
        return $this->hasMany(Cnproyecto::className(), ['fkctacosto' => 'pk_plancontable']);
    }
}
