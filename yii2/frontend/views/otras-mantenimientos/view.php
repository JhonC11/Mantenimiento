<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OtrosMantenimientos */

$this->title = $model->id_mantenimiento;
$this->params['breadcrumbs'][] = ['label' => 'Otros Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otros-mantenimientos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_mantenimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_mantenimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_mantenimiento',
            'id_maquina',
            'tipo_mantenimiento',
            'descripcion',
            'fecha',
        ],
    ]) ?>

</div>
