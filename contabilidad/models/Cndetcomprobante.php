<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cndetcomprobante".
 *
 * @property integer $pk_detcomprobante
 * @property integer $fkcomprobante
 * @property integer $fkcuentacontable
 * @property string $cndebe
 * @property string $cnhaber
 * @property integer $fkctacte
 * @property integer $fkproyecto
 * @property integer $fkdocument
 * @property string $cnnrodoc
 * @property string $cnglosadet
 *
 * @property Cncomprobante $fkcomprobante0
 * @property Cncuentacte $fkctacte0
 * @property Cndocumento $fkdocument0
 * @property Cnplancontable $fkcuentacontable0
 * @property Cnproyecto $fkproyecto0
 */
class Cndetcomprobante extends \yii\db\ActiveRecord
{
    /***
     * variable para controlar el tipo de datos debe o haber
     */
    public $tipoDebeHaber;
    public $codigoCuentaContable;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cndetcomprobante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkcomprobante', 'fkcuentacontable'], 'required'],
            [['fkcomprobante', 'fkcuentacontable', 'fkctacte', 'fkproyecto', 'fkdocument'], 'integer'],
            [['cndebe', 'cnhaber'], 'number'],
            [['cnnrodoc'], 'string', 'max' => 25],
            [['cnglosadet'], 'string', 'max' => 100],
            [['fkcomprobante'], 'exist', 'skipOnError' => true, 'targetClass' => Cncomprobante::className(), 'targetAttribute' => ['fkcomprobante' => 'pk_comprobante']],
            [['fkctacte'], 'exist', 'skipOnError' => true, 'targetClass' => Cncuentacte::className(), 'targetAttribute' => ['fkctacte' => 'pk_cuentacte']],
            [['fkdocument'], 'exist', 'skipOnError' => true, 'targetClass' => Cndocumento::className(), 'targetAttribute' => ['fkdocument' => 'pk_document']],
            [['fkcuentacontable'], 'exist', 'skipOnError' => true, 'targetClass' => Cnplancontable::className(), 'targetAttribute' => ['fkcuentacontable' => 'pk_plancontable']],
            [['fkproyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Cnproyecto::className(), 'targetAttribute' => ['fkproyecto' => 'pk_proyecto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_detcomprobante' => 'Pk Detcomprobante',
            'fkcomprobante' => 'Fkcomprobante',
            'fkcuentacontable' => 'Cuenta contable',
            'cndebe' => 'Cndebe',
            'cnhaber' => 'Cnhaber',
            'fkctacte' => 'identificador de cuenta corriente',
            'fkproyecto' => 'identificador de proyecto',
            'fkdocument' => 'Fkdocument',
            'cnnrodoc' => 'Cnnrodoc',
            'cnglosadet' => 'Descripcion de detalle',
            'tipoDebeHaber' => "Pago",
            "codigoCuentaContable" => "Cuenta Contable"
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkcomprobante0()
    {
        return $this->hasOne(Cncomprobante::className(), ['pk_comprobante' => 'fkcomprobante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkctacte0()
    {
        return $this->hasOne(Cncuentacte::className(), ['pk_cuentacte' => 'fkctacte']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkdocument0()
    {
        return $this->hasOne(Cndocumento::className(), ['pk_document' => 'fkdocument']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkcuentacontable0()
    {
        return $this->hasOne(Cnplancontable::className(), ['pk_plancontable' => 'fkcuentacontable']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkproyecto0()
    {
        return $this->hasOne(Cnproyecto::className(), ['pk_proyecto' => 'fkproyecto']);
    }
}
