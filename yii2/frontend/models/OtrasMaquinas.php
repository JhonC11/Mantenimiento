<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "otras_maquinas".
 *
 * @property integer $id_maquina
 * @property string $codigo_maquina
 * @property string $ubicacion
 * @property string $proveedor
 * @property string $fecha_compra
 * @property string $costo
 * @property string $orden_compra
 * @property string $marca
 * @property string $modelo
 * @property string $descripcion
 *
 * @property OtrosMantenimientos[] $otrosMantenimientos
 */
class OtrasMaquinas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otras_maquinas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_maquina', 'ubicacion', 'proveedor', 'fecha_compra', 'costo', 'orden_compra', 'marca', 'modelo', 'descripcion'], 'required'],
            [['fecha_compra'], 'safe'],
            [['costo'], 'integer'],
            [['codigo_maquina', 'ubicacion', 'proveedor', 'marca'], 'string', 'max' => 50],
            [['orden_compra'], 'string', 'max' => 80],
            [['modelo'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_maquina' => 'Id Maquina',
            'codigo_maquina' => 'Codigo Maquina',
            'ubicacion' => 'Ubicacion',
            'proveedor' => 'Proveedor',
            'fecha_compra' => 'Fecha Compra',
            'costo' => 'Costo',
            'orden_compra' => 'Orden Compra',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOtrosMantenimientos()
    {
        return $this->hasMany(OtrosMantenimientos::className(), ['id_maquina' => 'id_maquina']);
    }
}
