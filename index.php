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
$db2=\Core\Register::get('mysql');
$db1=\Core\Register::get('mysql');
//echo "<pre>";
//var_dump($db1);
//echo "</pre>";
class Cate{
    protected $_strategy=null;
    function index()
    {
        $this->_strategy->showAd();
        $this->_strategy->showCategory();
    }
    function setStrategy(\Core\IUserStrategy $strategy)
    {
        $this->_strategy=$strategy;
    }
}
$c=new Cate;
if($_GET['female'])
{
    echo "female<br>";
    $strategy=new \Core\FemaleStrategy();
}
elseif($_GET['male'])
{
    echo "Male<br>";
    $strategy=new \Core\MaleStrategy();
}
$c->setStrategy($strategy);
$c->index();

class Event extends \Observe\EventGenerator
{
    function trigger()
    {
        $this->notify();
    }
}
class Observer1 implements \Observe\IObserve
{
    function update($event = null)
    {
        echo "get money<br>";
    }

}
class Observer2 implements \Observe\IObserve
{
    function update($event = null)
    {
        echo "get water<br>";
    }
}
class Observer3 implements \Observe\IObserve
{
    function update($event = null)
    {
        echo "get food<br>";
    }
}
$e=new Event();
$e->addObserver(new Observer1());
$e->addObserver(new Observer2());
$e->addObserver(new Observer3());
$e->trigger();
//beverage 饮料
//    Coffee 咖啡 
//    Condiment 调味品
//              Sugar 糖 Butter 黄油 Milk 牛奶

$coffee=new \Decorator\Coffee();
$milk=new \Decorator\Milk();
$sugar=new \Decorator\Sugar();
$butter=new \Decorator\Butter();
echo $milk->cost().'<br>';
$coffee->addDecorator($milk);
$coffee->addDecorator($sugar);
$coffee->addDecorator($butter);
echo '<br>'.$coffee->coffeeName().$coffee->total().'<br>';

$student=\Core\Factory::getStudent(2);
$student->stu_name='赵敏';
$student->save();

$student=\Core\Register::get(2);
echo $student->stu_name;

