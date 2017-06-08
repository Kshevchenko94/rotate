<?php
use yii\helpers\Url;
$this->title = Yii::$app->user->identity['login_user'];
?>
<div class="user-default-index">
    <a href="<?=Url::to(['/login/logout'])?>">Logout</a>
</div>
