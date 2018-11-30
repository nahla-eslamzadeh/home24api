<?php
namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\LoginForm;
use app\models\TokenResource;
use yii\web\ServerErrorHttpException;

class TokenController extends Controller
{

	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => \yii\filters\VerbFilter::className(),
				'actions' => [
					'create'  => ['POST'],
				],
			],
		];
	}	

    /**
     * Returns token for username/password
     *
     * @return string
     */
    public function actionCreate()
    {
		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
		$model = new LoginForm();		
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
			
			$tokenresource = new TokenResource();
			$tokenresource->token = Yii::$app->user->identity->access_token;			
			
			
			return $tokenresource;
		}
		else
			throw new ServerErrorHttpException('Problem authenticating.');
		
    }

	
    
}
