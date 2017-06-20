<?php
namespace app\modules\user\controllers;

use yii\web\Controller;	

class AccountsController extends AppController
{
	public function actionIndex()
    {
        return $this->render('index');
    }
}
?>