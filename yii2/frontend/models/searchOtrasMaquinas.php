<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OtrasMaquinas;

/**
 * searchOtrasMaquinas represents the model behind the search form about `app\models\OtrasMaquinas`.
 */
class searchOtrasMaquinas extends OtrasMaquinas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_maquina', 'costo'], 'integer'],
            [['codigo_maquina', 'ubicacion', 'proveedor', 'fecha_compra', 'orden_compra', 'marca', 'modelo', 'descripcion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OtrasMaquinas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_maquina' => $this->id_maquina,
            'fecha_compra' => $this->fecha_compra,
            'costo' => $this->costo,
        ]);

        $query->andFilterWhere(['like', 'codigo_maquina', $this->codigo_maquina])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion])
            ->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'orden_compra', $this->orden_compra])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
