<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cncuentacte".
 *
 * @property integer $pk_cuentacte
 * @property string $cncodigo
 * @property string $cnnombre
 * @property string $cndireccion
 * @property string $cntelefono
 * @property string $cntelefax
 * @property string $cnnit
 * @property string $cncontacto
 * @property string $cnestado
 */
class Cncuentacte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cncuentacte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cnestado'], 'required'],
            [['cncodigo'], 'string', 'max' => 4],
            [['cnnombre', 'cndireccion', 'cncontacto'], 'string', 'max' => 50],
            [['cntelefono', 'cntelefax', 'cnnit'], 'string', 'max' => 15],
            [['cnestado'], 'string', 'max' => 1],
            [['cncodigo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_cuentacte' => 'Cuenta',
            'cncodigo' => 'Codigo',
            'cnnombre' => 'Nombre',
            'cndireccion' => 'Direccion',
            'cntelefono' => 'Telefono',
            'cntelefax' => 'Telefax',
            'cnnit' => 'Nit',
            'cncontacto' => 'Contacto',
            'cnestado' => 'Estado',
        ];
    }
}
