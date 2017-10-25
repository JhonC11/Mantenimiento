<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OtrosMantenimientos */

$this->title = 'Create Otros Mantenimientos';
$this->params['breadcrumbs'][] = ['label' => 'Otros Mantenimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otros-mantenimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
