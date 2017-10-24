<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Mantenimiento la patria';
?>
<div class="row">
	<h1>Mantenimiento de la planta</h1>
	<div class="col-md-8 col-md-offset-2" style="background-color: rgb(0, 86, 120)">
		<div class="col-md-6">
			<?= Html::img('@web/images/4.jpg', ['class' => 'featured-image', 'style' => 'width:250px; height:250px; margin-top: 30px; margin-left: 50px']) ?>
			<a href="?r=mantenimientos"><button class="btn btn-primary" style="position: relative;top: -121px;left: 117px;">Mantenimientos</button></a>

			
		</div>
		<div class="col-md-6">
			<?= Html::img('@web/images/4.jpg', ['class' => 'featured-image', 'style' => 'width:250px; height:250px; margin-top: 30px; margin-left: 50px']) ?>
			<a href="?r=reportes"><button class="btn btn-primary" style="position: relative;top: -121px; left: 134px;">Reportes</button></a>
			
		</div>

	</div>
</div>