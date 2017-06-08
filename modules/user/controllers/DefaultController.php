<?php

namespace app\modules\user\controllers;

use yii\web\Controller;	
use yii\filters\AccessControl;

/**
 * Default controller for the `user` module
 */
class DefaultController extends Controller
{
    public function behaviors()
	{
		return [
			'access'=>[
				'class'=>AccessControl::className(),
				'rules'=>[
					[
						'allow'=>true,
						'roles'=>['@']
					]
				]
			]
		];
	}
	
    public function actionIndex()
    {
        return $this->render('index');
    }
}
