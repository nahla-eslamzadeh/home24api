<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for "user" resource.
 *
 * @property integer $id
 * @property string $email
 */
class TokenResource extends Model
{
	public $token;		
}
