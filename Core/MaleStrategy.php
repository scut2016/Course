<?php
/**
 * 文件名：MaleStrategy.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.9:52
 */

namespace Core;
class MaleStrategy implements IUserStrategy
{
    function showAd()
    {
        echo "男士服装<br>";
    }

    function showCategory()
    {
        echo "男士服装分类<br>";
    }

}