<?php
use yii\helpers\Url;
$this->title = Yii::$app->user->identity['login_user'];
?>
<div class="row">
	<div class="co-md-12">
		<h2>Привет <?=Yii::$app->user->identity['login_user']?> !</h2>
	</div>
</div>
