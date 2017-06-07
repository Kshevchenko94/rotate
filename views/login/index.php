<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
?>

<div class="container">
	<div class="row headerLogin">
		<div class="col-md-7 logoLogin">
			<?=Html::img('@web/images/logo.gif')?>
		</div>
		<div class="col-md-5 logoLink">
			<?= Html::a('Войти', ['/index'], ['class' => '']) ?>
			<?php
				yii\bootstrap\Modal::begin([
					'headerOptions' => ['id' => 'modalHeader'],
					'header' => '<h2>Добавить аккаунт</h2>',
					'size'=>'modal-lg',
					'toggleButton' => ['label' => 'Регистрация', 'tag'=>'a'],
					
				]);
				$modelPopup = new \app\models\Registration();
				echo $this->context->renderPartial('registration', [
					'model' => $modelPopup,
				   ]);
				yii\bootstrap\Modal::end();

			?>
		</div>
	</div>
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

                    <?php echo $form->field($login, 'username', 
					[
						'inputOptions' => [
							'placeholder' => $login->getAttributeLabel('username'),
						],
					])->label(false)->textInput();
					?>

                    <?php
						echo $form->field($login, 'password', [
						'inputOptions' => [
							'placeholder' => $login->getAttributeLabel('password'),
						],
					])->label(false)->passwordInput();
					?>

                    <div class="form-group">
                        <?= Html::submitButton('Вход', ['class' => 'btn btn-login', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
</div>
