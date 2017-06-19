<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerCssFile('/css/style_account.css');
use yii\bootstrap\Nav;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 left_panel">
			<div class="logo">
				<?=Html::img('@web/images/logo.png')?>
			</div>
			<div class="menu">
				<?php
					echo Nav::widget([
						'activateItems'=>true,
						'options' => ['class' => 'nav'],
						'encodeLabels'=>false,
						'items' => [
							['label' => '<span class="glyphicon glyphicon-home"></span>Главная', 'url' => ['/user']],
							['label' => 'Ваши аккаунты', 'url' => ['/accounts']],
							['label' => 'Задания', 'url' => ['/tasks']],
							['label' => 'Статистика', 'url' => ['/statistic']],
							['label' => 'Сбор аудитории', 'url' => ['/auditor']],
							['label' => 'Данные', 'url' => ['/datas']],
							['label' => 'Настройки', 'url' => ['/settings']],
							['label' => 'Техподдержка', 'url' => ['/tehpoddershka']],
						]						
					]);
				?>
			</div>
		</div>
		<div class="col-md-9 top_panel">
			<div class="row">
				<div class="col-md-8">
					<span class="glyphicon glyphicon-align-justify"></span>
					<span class="glyphicon glyphicon-search"></span>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?= $content ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
