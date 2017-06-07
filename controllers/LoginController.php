<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Registration;


class LoginController extends Controller
{
	
	public $layout = 'auth';
	
	public function actionIndex()
	{
		
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}
		return $this->render('index', [
			'login' => $model,
		]);
	}

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
	//method registration
	public function actionRegistration()
	{
		$reg = new Registration();
		if(Yii::$app->request->isPost){
			if(!$reg::findOne(['login_user'=>Yii::$app->request->post('Registration')['login_user']])){
				if($reg->load(Yii::$app->request->post()) && $reg->save()){
					 Yii::$app->session->setFlash('reg_user');
					 return $this->redirect('/auth');
				}
			}
		}else{
			return $this->renderPartial('registration',['model'=>$reg]);
		}
		if(Yii::$app->request->isAjax){
			Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			if($reg::findOne(['login_user'=>Yii::$app->request->post('login_user')])){
				return ['status'=>'true'];
			}else{
				return ['status'=>'false'];
			}
			return $res;
		}else{
			return $this->renderPartial('registration',['model'=>$reg]);
		}
	}
}



?>