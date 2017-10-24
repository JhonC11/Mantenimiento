<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mantenimientos */

$this->title = 'Update Mantenimientos: ' . $model->id_mantenimiento;
$this->params['breadcrumbs'][] = ['label' => 'Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mantenimiento, 'url' => ['view', 'id' => $model->id_mantenimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mantenimientos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
