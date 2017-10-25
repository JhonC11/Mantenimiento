<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otros_mantenimientos".
 *
 * @property integer $id_mantenimiento
 * @property integer $id_maquina
 * @property string $tipo_mantenimiento
 * @property string $descripcion
 * @property string $fecha
 *
 * @property OtrasMaquinas $idMaquina
 */
class OtrosMantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otros_mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_maquina', 'tipo_mantenimiento', 'descripcion', 'fecha'], 'required'],
            [['id_maquina'], 'integer'],
            [['fecha'], 'safe'],
            [['tipo_mantenimiento'], 'string', 'max' => 40],
            [['descripcion'], 'string', 'max' => 150],
            [['id_maquina'], 'exist', 'skipOnError' => true, 'targetClass' => OtrasMaquinas::className(), 'targetAttribute' => ['id_maquina' => 'id_maquina']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mantenimiento' => 'Id Mantenimiento',
            'id_maquina' => 'Id Maquina',
            'tipo_mantenimiento' => 'Tipo Mantenimiento',
            'descripcion' => 'Descripcion',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMaquina()
    {
        return $this->hasOne(OtrasMaquinas::className(), ['id_maquina' => 'id_maquina']);
    }
}
