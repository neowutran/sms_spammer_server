<?php
namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    public $modelClass = 'common\models\Sms';
}
