<?php

namespace app\modules\user\controllers;

use yii\web\Controller;	
use yii\filters\AccessControl;

class AppController extends Controller
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
}