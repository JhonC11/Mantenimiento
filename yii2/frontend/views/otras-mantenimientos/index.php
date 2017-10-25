<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchOtrosMantenimientos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otros Mantenimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otros-mantenimientos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Otros Mantenimientos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mantenimiento',
            'id_maquina',
            'tipo_mantenimiento',
            'descripcion',
            'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>
    </div>
