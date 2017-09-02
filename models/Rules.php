<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Rules extends ActiveRecord
{
	public static function tableName()
	{
		return '{{rules}}';
	}
	
	public static function getRules()
	{
		$arrRules = [];
		$rules = self::find()->asArray()->all();
		foreach($rules as $rule){
			$arrRules[$rule['id_rule']] = $rule['name_rule'];
		}
		return $arrRules;
	}
}
?>