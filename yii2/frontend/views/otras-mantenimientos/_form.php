<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OtrosMantenimientos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otros-mantenimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_maquina')->textInput() ?>

    <?= $form->field($model, 'tipo_mantenimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
