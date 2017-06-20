<?php

namespace app\modules\user\controllers;

use yii\web\Controller;	

class DefaultController extends AppController
{
	
    public function actionIndex()
    {
        return $this->render('index');
    }
}
