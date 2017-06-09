<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\Registration;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class LoginController extends Controller
{
	
	public $layout = 'login';
	
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }
	
	public function actionIndex()
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			//return $this->goBack();
			return $this->redirect('user');
		}
		return $this->render('index', [
			'login' => $model,
		]);
	}

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('/login');
    }
	//method registration
	public function actionRegistration()
	{
		$reg = new Registration();
		if(Yii::$app->request->isPost){
			if(!$reg::findOne(['login_user'=>Yii::$app->request->post('Registration')['login_user']])){
				if($reg->load(Yii::$app->request->post()) && $reg->save()){
					 Yii::$app->session->setFlash('reg_user');
					 return $this->redirect('/login');
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
		}else{
			return $this->renderPartial('registration',['model'=>$reg]);
		}
	}
}

?>