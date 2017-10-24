<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reportes".
 *
 * @property integer $id_reporte
 * @property integer $id_mantenimiento
 * @property string $fecha_fin
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property string $descripcion
 * @property string $solucion
 * @property string $responsable
 *
 * @property Mantenimientos $idMantenimiento
 */
class Reportes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reportes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mantenimiento', 'fecha_fin', 'hora_inicio', 'hora_fin', 'descripcion', 'responsable'], 'required'],
            [['id_mantenimiento'], 'integer'],
            [['fecha_fin', 'hora_inicio', 'hora_fin'], 'safe'],
            [['descripcion'], 'string', 'max' => 250],
            [['solucion'], 'string', 'max' => 200],
            [['responsable'], 'string', 'max' => 100],
            [['id_mantenimiento'], 'exist', 'skipOnError' => true, 'targetClass' => Mantenimientos::className(), 'targetAttribute' => ['id_mantenimiento' => 'id_mantenimiento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_reporte' => 'Id Reporte',
            'id_mantenimiento' => 'Id Mantenimiento',
            'fecha_fin' => 'Fecha Fin',
            'hora_inicio' => 'Hora Inicio',
            'hora_fin' => 'Hora Fin',
            'descripcion' => 'Descripcion',
            'solucion' => 'Solucion',
            'responsable' => 'Responsable',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMantenimiento()
    {
        return $this->hasOne(Mantenimientos::className(), ['id_mantenimiento' => 'id_mantenimiento']);
    }
}
