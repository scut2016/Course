<?php
/**
 * 文件名：IObserve.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.10:20
 */

namespace Observe;
interface IObserve
{
    function update($event=null);
}