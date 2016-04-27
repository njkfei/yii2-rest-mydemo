<?php
return [
     'GET /postinfos' => '/postinfo/views',
     'GET,HEAD /postinfo/<id>' => '/postinfo/view',

     'GET /cron/cleanredis' => '/cron/cleanredis',
];