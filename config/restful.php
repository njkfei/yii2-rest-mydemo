<?php
return [
    'PUT,PATCH /users/<id>' => '/user/update',
    'DELETE /users/<id>' => '/user/delete',
    'GET,HEAD /users/<id>' => '/user/view',
    'POST /users' => '/user/create',
    'GET,HEAD /users' => '/user/index',

 	'PUT,PATCH <module>/users/<id>' => '<module>/user/update',
    'DELETE <module>/users/<id>' => '<module>/user/delete',
    'GET,HEAD <module>/users/<id>' => '<module>/user/view',
    'POST <module>/users' => '<module>/user/create',
    'GET,HEAD <module>/users' => '<module>/user/index',

    'PUT,PATCH /status/<id>' => '/status/update',
    'DELETE /status/<id>' => '/status/delete',
    'GET,HEAD /status/<id>' => '/status/view',
    'POST /status' => '/status/create',
    'GET,HEAD /status' => '/status/index',

     'GET /postinfos' => '/postinfo/views',
     'GET,HEAD /postinfo/<id>' => '/postinfo/view',
];