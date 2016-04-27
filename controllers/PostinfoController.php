<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use app\components\helper\ApiCheck;


/**
 * PostinfoController implements the CRUD actions for Postinfo model.
 */
class PostinfoController extends ActiveController
{
    public $modelClass = 'app\models\Postinfo';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];


    public function actions()
    {
        $actions = parent::actions();
        // 注销系统自带的实现方法
        unset($actions['index'],$actions['views'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
        return $actions;
    }


        public function actionViews()
        {
                   $theme = Yii::$app->cache->get("themes");

                   if($theme==false){
                       $theme = Yii::$app->db->createCommand('SELECT  `pacname`,`version`,`version_in`,`title`,`zip_name`,`theme_url`,`status` FROM `postinfo` ')->queryAll();

                       Yii::$app->cache->set("themes",json_encode($theme));

                       return $theme;
                   }

                   return json_decode($theme);
        }

    public function actionView($id)
    {           $request = Yii::$app->getRequest();
               // var_dump($_REQUEST);

               if(ApiCheck::valid($_REQUEST) === false){
                    return "not valid";
               }

               $theme = Yii::$app->cache->get("theme".$id);

               if($theme==false){
                   $theme = Yii::$app->db->createCommand('SELECT `pacname`,`version`,`version_in`,`title`,`zip_name`,`theme_url`,`status` FROM postinfo where id = ' .$id)->queryOne();

                   Yii::$app->cache->set("theme".$id,json_encode($theme));

                   return $theme;
               }

               return json_decode($theme);
    }
}
