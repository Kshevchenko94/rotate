<?php

namespace app\modules\user;


class Module extends \yii\base\Module
{
    
    public $controllerNamespace = 'app\modules\user\controllers';

    
    public function init()
    {
        parent::init();

        // custom initialization code goes here
		$urlManager = [
			'user'=>'user/default/index',
			'user/accounts'=>'user/accounts/index',
			'user/tasks'=>'user/tasks/index',
			'user/static'=>'user/static/index',
			'user/auditor'=>'user/auditor/index',
			'user/datas'=>'user/datas/index',
			'user/settings'=>'user/settings/index',
			'user/tehpoddershka'=>'user/tehpoddershka/index',
		];
    }
}
