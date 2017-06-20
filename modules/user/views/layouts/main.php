<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
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
		<div class="col-md-3 col-xs-3 left_panel">
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
							['label' => '<span>'.Html::img('@web/images/icons_menu/home.png').'</span>Главная', 'url' => ['/user']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/user.png').'</span>Ваши аккаунты', 'url' => ['/accounts']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/order-form.png').'</span>Задания', 'url' => ['/tasks']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/chart.png').'</span>Статистика', 'url' => ['/statistic']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/id-card.png').'</span>Сбор аудитории', 'url' => ['/auditor']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/cloud_upload.png').'</span>Данные', 'url' => ['/datas']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/setting_cog.png').'</span>Настройки', 'url' => ['/settings']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/earphone.png').'</span>Техподдержка', 'url' => ['/tehpoddershka']],
						]						
					]);
				?>
			</div>
		</div>
		<div class="col-md-9 col-xs-9">
			<div class="row top_panel">
				<div class="col-md-6">
					<span class="glyphicon glyphicon-align-justify"></span>
					<span class="glyphicon glyphicon-search"></span>
				</div>
				<div class="col-md-6">
					<div class="col-md-5 tarif_block" style="border:1px solid;">
						Тариф:Lite<span style="color:#b0b9d9; font-size:10px;">(14 дней)</span>
					</div>
					<div class="col-md-3">
						<span class="glyphicon glyphicon-envelope"></span>
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<div class="col-md-4 " style="border:1px solid;">
						<button type="button" class="btn top-right-block account_btn dropdown-toggle" data-toggle="dropdown">
								D
								<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
						  <li><a href="<?=Url::to(['/login/logout'])?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 content">
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
