<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OtrasMaquinas */

$this->title = 'Create Otras Maquinas';
$this->params['breadcrumbs'][] = ['label' => 'Otras Maquinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otras-maquinas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
