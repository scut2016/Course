<?php
/**
 * 文件名：Beverage.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.13:09
 */

namespace Decorator;
abstract class Beverage
{
    public $_name;//商品名称
    abstract public function cost();//价格
}