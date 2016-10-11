<?php
/**
 * 文件名：Factory.php
 */

namespace Core;
use DataMap\Student;

class Factory
{
    protected $config=[];
    static function createDb($type='master')
    {
        $configs=new Config(APP.'/configs');
        if($type=='master')
             $config=$configs['db'][$type];
        else
        {
            $slaves=$configs['db']['slave'];
            $config=$slaves[array_rand($slaves)];
        }
        $db=MySQLi::getDb($config);
        Register::set('mysql',$db);
        return $db;
    }

    static function getStudent($id)
    {
       $student=Register::get($id);
        if(!$student)
        {
            $student=new Student($id);
            Register::set($id,$student);
        }
        return $student;
    }
    
    public static function getConfig()
    {
        $config=new Config(APP.'/configs');
        return $config;
    }
}