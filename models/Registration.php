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
			[['name', 'surname','email','login_user', 'password_user', 'rule','sex'], 'required', 'message'=>'Поле не может быть пустым!'],
			['email','email', 'message'=>'Поле для Email!'],
			[['avatar'], 'image', 'message'=>'Файл не изображение.']
		];
	}
}
?>