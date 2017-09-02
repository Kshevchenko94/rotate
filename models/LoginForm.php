<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
	public $rememberMe = false;

    private $_user = false;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required', 'message'=>'Поле не может быть пустое!!!'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
			['rememberMe','boolean'],
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Логин\пароль введены не верно.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) {
			if($this->rememberMe){
				$u = $this->getUser();
				$u->generateAuthKey();
				$u->save();
			}
			
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30:0);
        }
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
