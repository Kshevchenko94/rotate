<?php

use kartik\file\FileInput;

use yii\helpers\Url;
$this->title = 'Данные';
?>
<div class="row">
	<div class="col-md-12">
		<h2><?=$this->title?></h2>
	</div>
</div>
<?php
echo FileInput::widget([
    'name' => 'attachment_48[]',
    'options'=>[
        'multiple'=>true
    ],
    'pluginOptions' => [
        'uploadUrl' => Url::to(['/site/file-upload']),
        'uploadExtraData' => [
            'album_id' => 20,
            'cat_id' => 'Nature'
        ],
        'maxFileCount' => 10
    ]
]);
?>