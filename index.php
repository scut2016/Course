<?php
// PSR-0
// 1.命名空间必须和绝对路径一致
// 2 .类名的首字母必须大写
// 3 .所有的类必须自动载入，不能include或者require
// 4 .唯一的入口文件

define('APP',__DIR__);
include "Core/Loader.php";
spl_autoload_register('\Core\Loader::autoload');

$user=Factory\UserFactory::createUser('zhansan',2);
$db=\Core\Factory::createDb();
var_dump($db);
echo "1213";
