<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OtrasMaquinas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otras-maquinas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo_maquina')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_compra')->textInput() ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orden_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
