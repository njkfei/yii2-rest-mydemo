<?php

namespace app\controllers;
use app\components\helper\ApiCheck;
use Yii;

class UserController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\User';

    // 分页支持
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actionOne($id)
    {
        if(ApiCheck::valid($_REQUEST) === false){
            return "not valid";
        }

        $result = Yii::$app->db->createCommand('SELECT *  FROM user where id = ' .$id)->queryOne();

        // remove fields that contain sensitive information
        unset($result['auth_key'], $result['password_hash'], $result['password_reset_token'],$result['created_at']);

        return $result;
    }
}
