<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maquinas".
 *
 * @property integer $id_maquina
 * @property string $codigo_maquina
 * @property string $nombre
 * @property string $marca
 * @property string $voltaje
 * @property string $modelo
 * @property string $peso
 * @property string $serie
 * @property string $for_max
 * @property string $for_min
 * @property string $uni_max
 * @property string $uni_min
 * @property string $proveedor
 * @property string $referencia
 *
 * @property Mantenimientos[] $mantenimientos
 */
class Maquinas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maquinas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo_maquina', 'nombre', 'marca', 'voltaje', 'modelo', 'peso', 'serie', 'for_max', 'for_min', 'uni_max', 'uni_min', 'proveedor', 'referencia'], 'required'],
            [['modelo'], 'integer'],
            [['codigo_maquina', 'voltaje', 'peso', 'serie', 'for_max', 'for_min', 'uni_max', 'uni_min'], 'string', 'max' => 50],
            [['nombre', 'marca', 'proveedor', 'referencia'], 'string', 'max' => 80],
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
            'nombre' => 'Nombre',
            'marca' => 'Marca',
            'voltaje' => 'Voltaje',
            'modelo' => 'Modelo',
            'peso' => 'Peso',
            'serie' => 'Serie',
            'for_max' => 'For Max',
            'for_min' => 'For Min',
            'uni_max' => 'Uni Max',
            'uni_min' => 'Uni Min',
            'proveedor' => 'Proveedor',
            'referencia' => 'Referencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantenimientos()
    {
        return $this->hasMany(Mantenimientos::className(), ['id_maquina' => 'id_maquina']);
    }
}
