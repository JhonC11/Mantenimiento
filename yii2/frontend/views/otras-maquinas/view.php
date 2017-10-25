<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OtrasMaquinas */

$this->title = $model->id_maquina;
$this->params['breadcrumbs'][] = ['label' => 'Otras Maquinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otras-maquinas-view">

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
            'ubicacion',
            'proveedor',
            'fecha_compra',
            'costo',
            'orden_compra',
            'marca',
            'modelo',
            'descripcion',
        ],
    ]) ?>

</div>
