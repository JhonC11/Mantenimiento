<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Maquinas */

$this->title = $model->id_maquina;
$this->params['breadcrumbs'][] = ['label' => 'Maquinas', 'url' => ['index']];
?>
<div class="maquinas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_maquina], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_maquina], [
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
                'id_maquina',
                'codigo_maquina',
                'nombre',
                'marca',
                'voltaje',
                'modelo',
                'peso',
                'serie',
                'for_max',
                'for_min',
                'uni_max',
                'uni_min',
                'proveedor',
                'referencia',
            ],
            ]) ?>

        </div>
