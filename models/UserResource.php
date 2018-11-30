<?php

namespace app\models;

use Yii;


/**
 * This is the model class for "user" resource.
 *
 * @property integer $id
 * @property string $email
 */
class UserResource extends User
{
	public function fields()
	{
		return ['id', 'email'];
	}		
}
