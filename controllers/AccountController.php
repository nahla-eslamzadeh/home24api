<?php
namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\UserResource;

class AccountController extends Controller
{
	public function actionIndex($token)
	{
		return UserResource::find()
			->where(['access_token' => $token])
			->one();				
	}	
	
    
}
