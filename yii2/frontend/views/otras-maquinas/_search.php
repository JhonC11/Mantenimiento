<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchOtrasMaquinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otras-maquinas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_maquina') ?>

    <?= $form->field($model, 'codigo_maquina') ?>

    <?= $form->field($model, 'ubicacion') ?>

    <?= $form->field($model, 'proveedor') ?>

    <?= $form->field($model, 'fecha_compra') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'orden_compra') ?>

    <?php // echo $form->field($model, 'marca') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
