<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchMaquinas */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maquinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maquinas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Maquinas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_maquina',
            'codigo_maquina',
            'nombre',
            'marca',
            'voltaje',
            // 'modelo',
            // 'peso',
            // 'serie',
            // 'for_max',
            // 'for_min',
            // 'uni_max',
            // 'uni_min',
            // 'proveedor',
            // 'referencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
