<?php
// PSR-0
// 1.命名空间必须和绝对路径一致
// 2 .类名的首字母必须大写
// 3 .所有的类必须自动载入，不能include或者require
// 4 .唯一的入口文件

define('APP',__DIR__);
include "Core/Loader.php";
spl_autoload_register('\Core\Loader::autoload');
/**
 * [dd 格式化var_dump]
 * @param  [mixed] $var [description]
 * @return [null]       [description]
 */
function dd($var)
{
    $arr=debug_backtrace();
    echo "<div style='border:1px dotted black;'>";
    if($arr)
    {
        echo "文件名：".$arr[0]['file']."<br>";
        echo "文件行号:".$arr[0]['line']."<br>";
    }
    echo "</div>";
    if(is_array($var)||is_object($var))
    {
        echo "<pre><div style='border:1px solid black;color:red'>-----------调试信息开始---------<br>";
        print_r($var);
        echo "-----------调试信息结束---------</div></pre>";
    }
    else
    {
        echo "<pre><div style='border:1px solid black;color:black'>-----------调试信息开始---------<br>";
        var_dump($var);
        echo "-----------调试信息结束---------</div></pre>";
    }
}


/*
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
echo $student->stu_name."<br>";

//$config=new \Core\Config(APP.'/configs');
//var_dump($config);
//var_dump($config['controller']);
$cf=new \Core\Factory();
$config=$cf->getConfig();
echo "<pre>";
var_dump($config['db']);
echo "</pre>";
*/
//$config=\Core\Factory::createDb('slave');
//$all=new \Core\AllStudent();
//foreach ($all as $key=>$student)
//{
//    dd($student->stu_name);
//    if($key==1)
//    {
//        $student->stu_name='张翠山';
//        $student->save();
//    }
//
//}
$proxy=new \Core\Proxy();
$t=$proxy->getStudentName(2);
dd($t);
$proxy->setStudentName(2,"赵敏111");

