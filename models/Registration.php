<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Registration extends ActiveRecord
{
	public static function tableName()
	{
		return '{{users}}';
	}
	
	public function rules()
	{
		return [
			[['login_user', 'password_user'], 'required', 'message'=>'Поле не может быть пустым!'],
			[['proxi', 'checkproxi'], 'safe',],
		];
	}
}
?>