<?php
$config= [
    'master'=>[
                'type'      =>  'mysql',
                'hostname'  =>  '127.0.0.1',
                'username'  =>  'root',
                'password'  =>  'root',
                'dbName'    =>  'train',
                'charset'   =>  'utf8',
              ],
    'slave'=>[
                'slave1'=> 
                [
                    'type'      =>  'mysql',
                    'hostname'  =>  '127.0.0.1',
                    'username'  =>  'root',
                    'password'  =>  'root',
                    'dbName'    =>  'train',
                    'charset'   =>  'utf8',
                ],
            ],
];
return $config;