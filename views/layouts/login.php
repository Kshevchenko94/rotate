<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$this->registerCssFile('css/login.css');

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

<div class="wrap">
    <div class="container">
	<div class="container-fluid headerLogin">
  <div class="row">
		<nav role="navigation" class="navbar">
		  <!-- Логотип и мобильное меню -->
			<div class="navbar-header logoLogin">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle btn_toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?=Html::img('@web/images/logo.gif')?>
			</div>
		  <!-- Навигационное меню -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right logoLink">
				  <li><?= Html::a('Войти', ['/login/'], ['class' => '']) ?></li>
				</ul>
			</div>
		</nav>
  </div>
</div>	
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
