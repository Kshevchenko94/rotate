<?php

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\NavBar;


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
		<div class="col-md-3 col-xs-3 hidden-xs left_panel">
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
							['label' => '<span>'.Html::img('@web/images/icons_menu/user.png').'</span>Ваши аккаунты', 'url' => ['/user/accounts']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/order-form.png').'</span>Задания', 'url' => ['/user/tasks']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/chart.png').'</span>Статистика', 'url' => ['/user/statistic']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/id-card.png').'</span>Сбор аудитории', 'url' => ['/user/auditor']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/cloud_upload.png').'</span>Данные', 'url' => ['/user/datas']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/setting_cog.png').'</span>Настройки', 'url' => ['/user/settings']],
							['label' => '<span>'.Html::img('@web/images/icons_menu/earphone.png').'</span>Техподдержка', 'url' => ['/user/tehpoddershka']],
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
					<div class="col-md-4 tarif_block" style="border:1px solid;">
						Тариф:Lite<span style="color:#b0b9d9; font-size:10px;">(14 дней)</span>
					</div>
					<div class="col-md-3">
						<span class="glyphicon glyphicon-envelope"></span>
						<span class="glyphicon glyphicon-bell"></span>
					</div>
					<div class="col-md-5">
						<button type="button" class="btn account_btn dropdown-toggle" data-toggle="dropdown">
								<?=Html::img('@web/images/avatars/drakon.jpg',['width'=>'50px'], ['height'=>'50px'])?>
								<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="<?=Url::to(['/user/profile'])?>"><span class="glyphicon glyphicon-user"></span>Аккаунт</a></li>
							<li><a href="<?=Url::to(['/user/paymant'])?>"><span class="glyphicon glyphicon-credit-card"></span>Пополнить баланс</a></li>
							<li><a href="<?=Url::to(['/user/paymant'])?>"><span class="glyphicon glyphicon-star"></span>Сменить тариф</a></li>
							<li><a href="<?=Url::to(['/user/paymant'])?>"><span class="glyphicon glyphicon-list-alt"></span>Правила</a></li>
							<li><a href="<?=Url::to(['/login/logout'])?>"><span class="glyphicon glyphicon-log-out"></span>Выйти</a></li>
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
