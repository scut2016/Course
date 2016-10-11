<?php
/**
 * 文件名：IStudentProxy.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/11.14:09
 */

namespace Core;
interface IStudentProxy
{
    function getStudentName($id);
    function setStudentName($id,$name);

}