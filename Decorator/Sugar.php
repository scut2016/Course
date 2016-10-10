<?php
/**
 * 文件名：CondimentSugar.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.13:18
 */

namespace Decorator;

class Sugar implements ICondiment
{
    function cost()
    {
        return 2;
    }

    function name()
    {
        return "Sugar";
    }

}
{

}