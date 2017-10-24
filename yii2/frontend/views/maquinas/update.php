<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Maquinas */

$this->title = 'Update Maquinas: ' . $model->id_maquina;
$this->params['breadcrumbs'][] = ['label' => 'Maquinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_maquina, 'url' => ['view', 'id' => $model->id_maquina]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maquinas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
