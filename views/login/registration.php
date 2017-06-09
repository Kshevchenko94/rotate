<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

	<div class="row">
		<div class="col-md-12">
			<p class="text-center" style="color:#0e1a35; font-weight:bold;">Добавьте аккаунт от инстаграма, если у вас возникнут проблемы прочитайте FAQ или обратитесь в тех.поддержку.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'layout' => 'horizontal',
				'action'=>'/login/registration',
				'fieldConfig' => [
					'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
					'labelOptions' => ['class' => 'col-lg-1 control-label'],
				],
			]); ?>
			<div style="border-bottom:1px solid #dadee7; height:50px; margin-bottom:20px;">
				<?= $form->field($model, 'login_user')->textInput(['autofocus' => false,'style'=>'border:none; box-shadow:0; border-radius:0;'])->label('Логин:',['style'=>'color:#dadee7;']) ?>
			</div>
			
			<div style="border-bottom:1px solid #dadee7; height:50px; margin-bottom:20px;">
			<?= $form->field($model, 'password_user')->passwordInput(['style'=>'border:none; box-shadow:0; border-radius:0;'])->label('Пароль',['style'=>'color:#dadee7;']) ?>
			</div>
			<?=$form->field($model, 'proxi')->dropdownList([],['style'=>'border-radius:25px;'])->label('Прокси',['style'=>'color:#dadee7;'])?>
			<?=$form->field($model, 'proxi')->radioList(['0'=>'Не менять прокси даже в случае ошибки','1'=>"Использовать прокси ROTATE'а"],['style'=>'color:#dadee7;'])->label('')?>
			<div class="form-group">
				<div class="col-lg-offset-1 col-lg-11">
					<?= Html::submitButton('Сохранить', ['class' => 'btn center-block btn-lg', 'name' => 'save', 'style'=>'background:#00bf1b; color:#ffffff;']) ?>
				</div>
			</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>



	
