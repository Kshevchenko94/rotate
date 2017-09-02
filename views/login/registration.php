<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->registerJsFile('/js/registration/registration.js');
?>

<div class="bodyLogin">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $form = ActiveForm::begin([
					'id' => 'login-form',
					'layout' => 'horizontal',
					'fieldConfig' => [
						'template' => "<div class=\"col-lg-4\">{label}</div>\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-4\">{error}</div>",
						'labelOptions' => ['class' => 'col-lg-12 control-label'],
					],
				]); ?>
					<?php echo $form->field($model, 'name')->label('Имя пользователя')->textInput();?>
					<?php echo $form->field($model, 'surname')->label('Фамилия пользователя')->textInput();?>
					<?php echo $form->field($model, 'email')->label('Email')->textInput();?>
					<?php echo $form->field($model, 'login_user')->label('Логин пользователя')->textInput();?>
					<?php echo $form->field($model, 'password_user')->label('Пароль пользователя')->passwordInput();?>
					<?php echo $form->field($model, 'rule')->label('Должность пользователя')->dropDownList($rules,['prompt'=>'Выберите должность']);?>
					<?php echo $form->field($model, 'sex')->label('Пол пользователя')->radioList(['1'=>'М','2'=>'Ж']);?>
					<?=$form->field($model, 'avatar')->label('Фотография пользователя')->fileInput();?>
					<?= Html::submitButton('Регистрация', ['class' => 'btn btn-login', 'name' => 'contact-button']) ?>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
	
</div>


	
