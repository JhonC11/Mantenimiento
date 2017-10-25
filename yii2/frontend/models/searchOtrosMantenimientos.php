<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OtrosMantenimientos;

/**
 * searchOtrosMantenimientos represents the model behind the search form about `app\models\OtrosMantenimientos`.
 */
class searchOtrosMantenimientos extends OtrosMantenimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_mantenimiento', 'id_maquina'], 'integer'],
            [['tipo_mantenimiento', 'descripcion', 'fecha'], 'safe'],
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
        $query = OtrosMantenimientos::find();

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
            'id_mantenimiento' => $this->id_mantenimiento,
            'id_maquina' => $this->id_maquina,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'tipo_mantenimiento', $this->tipo_mantenimiento])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
