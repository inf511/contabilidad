<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cndocumento".
 *
 * @property integer $pk_document
 * @property string $cndescripcion
 * @property string $cndocnota
 * @property string $cndocbreve
 */
class CnDocumento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cndocumento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'nota'], 'string', 'max' => 50],
            [['breve'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pk_document' => 'Documento',
            'cndescripcion' => 'descripcion',
            'cndocnota' => 'nota',
            'cndocbreve' => 'breve',
        ];
    }
}