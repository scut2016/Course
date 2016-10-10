<?php
/**
 * 文件名：Factory.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/9.14:47
 */

namespace Core;
use DataMap\Student;

class Factory
{
    static function createDb()
    {
        $db=MySQLi::getDb();
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
}