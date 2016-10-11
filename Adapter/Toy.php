<?php
header("Content-type:text/html;charset=utf-8");
//黑枣公司玩具类
abstract class Toy{
    public abstract function openMouth();
    public abstract function closeMouth();
}
class Dog extends Toy{
    public function openMouth()
    {
        echo "dog black  openMouth<br>";
    }

    public function closeMouth()
    {
        echo "dog black  closeMouth<br>";
    }
}

class Cat extends Toy{
    public function openMouth()
    {
        echo " Cat black  openMouth<br>";
    }

    public function closeMouth()
    {
        echo "Cat black  closeMouth<br>";
    }

}
//红枣公司  RedOpenMouth RedCloseMouth
//绿枣公司  GreenOpenMouth GreenMouthGreen

//目标角色  红枣遥控公司
interface RedTarget{
    public function redOpenMouth();
    public function redCloseMouth();
}
interface GreenTarget{
    public function greenOperateMouth($type=0);
}

//类适配器
class RedAdapter implements RedTarget
{
    protected $adaptee;
    function __construct(Toy $adaptee)
    {
        $this->adaptee=$adaptee;
    }

    public function redOpenMouth()
    {
        echo "<br>遥控控制：";
        $this->adaptee->openMouth();
    }

    public function redCloseMouth()
    {
        echo "<br>遥控控制：";
        $this->adaptee->closeMouth();
    }

}

//绿枣公司适配器
class GreenAdapter implements GreenTarget
{
    protected $adaptee;
    function __construct(Toy $adaptee)
    {
        $this->adaptee=$adaptee;
    }

    public function greenOperateMouth($type=0)
    {
        if($type)
        {
            echo "<br>智能控制：";
            $this->adaptee->openMouth();
        }

        else
        {
            echo "<br>智能控制：";
            $this->adaptee->closeMouth();
        }

    }
}

$d=new Dog();
$adapterRed=new RedAdapter($d);
$adapterRed->redOpenMouth();
$adapterGreen=new GreenAdapter($d);
$adapterGreen->greenOperateMouth(0);