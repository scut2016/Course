<?php
/**
 * 文件名：Factory.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/9.14:47
 */

namespace Core;
class Factory
{
    static function createDb()
    {
        $db=MySQLi::getDb();
        Register::set('mysql',$db);
        return $db;

    }
}