<?php
/**
 * 文件名：FemaleStrategy.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.9:50
 */

namespace Core;


class FemaleStrategy implements IUserStrategy
{
    function showAd()
    {
        echo "女士服装<br>";
    }

    function showCategory()
    {
        echo "女士服装分类<br>";
    }

}