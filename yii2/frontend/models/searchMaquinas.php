<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Maquinas;

/**
 * searchMaquinas represents the model behind the search form about `app\models\Maquinas`.
 */
class searchMaquinas extends Maquinas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_maquina', 'modelo'], 'integer'],
            [['codigo_maquina', 'nombre', 'marca', 'voltaje', 'peso', 'serie', 'for_max', 'for_min', 'uni_max', 'uni_min', 'proveedor', 'referencia'], 'safe'],
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
        $query = Maquinas::find();

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
            'modelo' => $this->modelo,
        ]);

        $query->andFilterWhere(['like', 'codigo_maquina', $this->codigo_maquina])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'voltaje', $this->voltaje])
            ->andFilterWhere(['like', 'peso', $this->peso])
            ->andFilterWhere(['like', 'serie', $this->serie])
            ->andFilterWhere(['like', 'for_max', $this->for_max])
            ->andFilterWhere(['like', 'for_min', $this->for_min])
            ->andFilterWhere(['like', 'uni_max', $this->uni_max])
            ->andFilterWhere(['like', 'uni_min', $this->uni_min])
            ->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'referencia', $this->referencia]);

        return $dataProvider;
    }
}
