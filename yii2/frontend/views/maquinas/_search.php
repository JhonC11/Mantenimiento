<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\searchMaquinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maquinas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_maquina') ?>

    <?= $form->field($model, 'codigo_maquina') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'voltaje') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'serie') ?>

    <?php // echo $form->field($model, 'for_max') ?>

    <?php // echo $form->field($model, 'for_min') ?>

    <?php // echo $form->field($model, 'uni_max') ?>

    <?php // echo $form->field($model, 'uni_min') ?>

    <?php // echo $form->field($model, 'proveedor') ?>

    <?php // echo $form->field($model, 'referencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
