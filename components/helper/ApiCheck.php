<?php

namespace app\components\helper;
use Yii;

class ApiCheck
{
     public static  function valid($request){
         foreach($request as $key => $value){
             echo $key.":".$value;
             echo "\r\n";
         }

         $request = array_map('strtolower', $request);
         ksort($request);
         foreach ($request as $key => $val) {
             echo "$key = $val\n";
             $request[strtolower($key)]=strtolower($value);
         }

         ksort($request);

         foreach ($request as $key => $val) {
             echo "$key = $val\n";
         }

         return false;
     }
}