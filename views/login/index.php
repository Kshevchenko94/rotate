<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 bodyLogin">
			<div class="hello">
				<h1 style="color:#d9dee7;">Приветсвую вас <span style="color:#7ba0fe;">снова!</span></h1>
			</div>
			<?php if(Yii::$app->session->hasFlash('reg_user')){ ?>
				<div class="alert alert-success">
					Вы успешно зарегестрировались.
				</div>
			<?php }?>
			<div class="formsLogin">
				<?php $form = ActiveForm::begin([
					'id' => 'login-form',
					'layout' => 'horizontal',
				]); ?>

                    <?php echo $form->field($login, 'username')->label(false)->textInput(['placeholder'=>'Логин']);?>

                    <?php echo $form->field($login, 'password')->label(false)->passwordInput(['placeholder'=>'Пароль']);?>
                    <?php echo $form->field($login, 'rememberMe')->label('Запомнить')->checkbox();?>

                    <div class="form-group">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-login', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>