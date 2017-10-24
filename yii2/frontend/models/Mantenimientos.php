<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mantenimientos".
 *
 * @property integer $id_mantenimiento
 * @property integer $id_maquina
 * @property string $tipo_mantenimiento
 * @property string $servicio
 * @property string $unidad
 * @property string $fecha
 *
 * @property Maquinas $idMaquina
 * @property Reportes[] $reportes
 */
class Mantenimientos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mantenimientos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_maquina', 'tipo_mantenimiento', 'servicio', 'unidad', 'fecha'], 'required'],
            [['id_maquina'], 'integer'],
            [['fecha'], 'safe'],
            [['tipo_mantenimiento'], 'string', 'max' => 40],
            [['servicio', 'unidad'], 'string', 'max' => 50],
            [['id_maquina'], 'exist', 'skipOnError' => true, 'targetClass' => Maquinas::className(), 'targetAttribute' => ['id_maquina' => 'id_maquina']],
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
            'servicio' => 'Servicio',
            'unidad' => 'Unidad',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMaquina()
    {
        return $this->hasOne(Maquinas::className(), ['id_maquina' => 'id_maquina']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReportes()
    {
        return $this->hasMany(Reportes::className(), ['id_mantenimiento' => 'id_mantenimiento']);
    }
}
