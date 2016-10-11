<?php
/**
 * 文件名：Proxy.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/11.14:10
 */

namespace Core;

class Proxy implements IStudentProxy
{
    function getStudentName($id)
    {
        $db=Factory::createDb('slave');
        $res=$db->query("select stu_name from student where id=$id");
        return $res->fetch_assoc();
    }

    function setStudentName($id, $name)
    {
        $db=Factory::createDb();
        $sql="update student set stu_name='{$name}' where id=$id";
        $res=$db->query($sql);
    }

}