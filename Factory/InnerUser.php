<?php
/**
 * 文件名：InnerUser.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/9.14:32
 */

namespace Factory;
class InnerUser extends AbstractUser
{
    protected $discount=0.5;
    protected $grade=3;//1 为普通用户  2 VIP用户   3 为内部员工
}