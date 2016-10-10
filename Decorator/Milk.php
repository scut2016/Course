<?php
/**
 * 文件名：CondimentMilk.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.13:17
 */

namespace Decorator;


class Milk implements ICondiment
{
    function cost()
    {
       return 15;
    }

    function name()
    {
        return "Milk";
    }

}