<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cngrupo".
 *
 * @property integer $pkgrupo
 * @property string $codigo
 * @property string $descripcion
 * @property string $estado
 *
 * @property Cnusuario[] $cnusuarios
 */
class Cngrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cngrupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['codigo'], 'string', 'max' => 4],
            [['descripcion'], 'string', 'max' => 30],
            [['estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkgrupo' => 'Pkgrupo',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCnusuarios()
    {
        return $this->hasMany(Cnusuario::className(), ['fkgrupo' => 'pkgrupo']);
    }
}
