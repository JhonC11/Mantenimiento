<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reportes */

$this->title = 'Update Reportes: ' . $model->id_reporte;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reporte, 'url' => ['view', 'id' => $model->id_reporte]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reportes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
