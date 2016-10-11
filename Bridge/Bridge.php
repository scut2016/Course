<?php
/**
 * 文件名：Bridge.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/11.10:07
 */
header("Content-type:text/html;charset=utf-8");
/**抽象化角色            抽象路
 * Class AbstractRoad
 */
abstract class AbstractRoad
{
    public $icar;

    abstract function Run();
}
/**具体的             高速公路
 * Class speedRoad
 */
class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在高速公路上。";
    }
}

/**乡村街道
 * Class Street
 */
class Street extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在乡村街道上。";
    }
}
/**抽象汽车接口
 * Interface ICar
 */
interface ICar
{
    function Run();
}
/**吉普车
 * Class Jeep
 */
class Jeep implements ICar
{
    function Run()
    {
        echo "吉普车跑";
    }
}

/**小汽车
 * Class Car
 */
class Car implements ICar
{

    function Run()
    {
        echo "小汽车跑";
    }
}

$speedRoad=new SpeedRoad();
$speedRoad->icar=new Car();
$speedRoad->Run();

echo "<hr/>";

$street=new Street();
$street->icar=new Jeep();
$street->Run();
