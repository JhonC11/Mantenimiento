<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchMantenimientos */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mantenimientos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mantenimientos-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mantenimientos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id_mantenimiento',
            'id_maquina',
            'tipo_mantenimiento',
            'servicio',
            'unidad',
            // 'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        ]); ?>
    </div>
