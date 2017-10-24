<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Mantenimiento la patria';
?>

<div class="site-index">
	<?php if (Yii::$app->user->isGuest) { ?>

		<div class="jumbotron">
			<h1>Bienvenido al gestor de mantenimientos. </h1>

			<p class="lead">Si aún no tiene una cuenta, registrese <a href="?r=site/signup">aquí</a>.</p>

		</div>
		<?php } else{?>
		<h1 class="text-center">Dashboard</h1>
		<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic provident, aut, temporibus perferendis consequatur eaque explicabo illo impedit dicta nam molestias, sint eveniet excepturi, esse ducimus magni nisi reiciendis quam placeat! Deleniti neque in doloremque, natus aliquam asperiores, enim nesciunt laudantium sequi, error necessitatibus dolor culpa veritatis blanditiis eaque dolore.</p>
		<div class="row">
			<div class="container-fluid text-center">
				<div class="col-md-6 ">
					<h1 class=""></h1>
					<?= Html::img('@web/images/2.png', ['class' => 'featured-image img-responsive', 'style' => 'width:474px; height:400px']) ?>
					<a href="?r=site/manpla">
						<button class="btn btn-default manpla" style="    position: absolute;left: -37px;top: 149px;">Mantenimiento planta.</button>
					</a>
				</div>
				<div class="col-md-6">
					<h1 class=""></h1>
					<?= Html::img('@web/images/1.png', ['class' => 'featured-image img-responsive', 'style' => 'width:500px; height:400px']) ?>
					<a href="?r=site/manem"><button class="btn btn-default manem" style="position: relative;top: -227px;right: -149px;">Mantenimiento empresa.</button></a>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
