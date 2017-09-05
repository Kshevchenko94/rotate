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
					
					<?= Html::submitButton('Регистрация', ['class' => 'btn btn-login', 'name' => 'contact-button']) ?>
				<?php ActiveForm::end(); ?>
			</div>
		</div>
	</div>
	
</div>


	
