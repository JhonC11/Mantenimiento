<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OtrosMantenimientos */

$this->title = 'Update Otros Mantenimientos: ' . $model->id_mantenimiento;
$this->params['breadcrumbs'][] = ['label' => 'Otros Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mantenimiento, 'url' => ['view', 'id' => $model->id_mantenimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="otros-mantenimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
