<?php
return [
     'GET /postinfos' => '/postinfo/views',
     'GET,HEAD /postinfo/<id>' => '/postinfo/view',

     'GET /cron/cleanredis' => '/cron/cleanredis',

    'GET /user/<id>' => '/user/one',

    ['class' => 'yii\rest\UrlRule', 'controller' => 'postinfo'],
    ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
];