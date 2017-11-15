<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cnusuario".
 *
 * @property integer $pkusuario
 * @property integer $fkgrupo
 * @property string $nickname
 * @property string $nombrecompleto
 * @property string $apellidocompleto
 * @property string $password
 * @property string $estado
 * @property string $email
 * @property string $authkey
 * @property string $accesstoken
 *
 * @property Cngrupo $fkgrupo0
 */
class Cnusuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cnusuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fkgrupo'], 'required'],
            [['fkgrupo'], 'integer'],
            [['nickname', 'apellidocompleto', 'password', 'email', 'authkey', 'accesstoken'], 'string', 'max' => 50],
            [['nombrecompleto'], 'string', 'max' => 15],
            [['estado'], 'string', 'max' => 1],
            [['fkgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Cngrupo::className(), 'targetAttribute' => ['fkgrupo' => 'pkgrupo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pkusuario' => 'Pkusuario',
            'fkgrupo' => 'Fkgrupo',
            'nickname' => 'Nickname',
            'nombrecompleto' => 'Nombrecompleto',
            'apellidocompleto' => 'Apellidocompleto',
            'password' => 'Password',
            'estado' => 'Estado',
            'email' => 'Email',
            'authkey' => 'Authkey',
            'accesstoken' => 'Accesstoken',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkgrupo0()
    {
        return $this->hasOne(Cngrupo::className(), ['pkgrupo' => 'fkgrupo']);
    }
}
