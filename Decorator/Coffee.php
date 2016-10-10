<?php
/**
 * 文件名：Coffee.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.13:11
 */

namespace Decorator;

class Coffee extends Beverage
{
    protected $_condiments=[];
    public function __construct()
    {
        $this->_name='Coffee';
    }
//纯咖啡的价格
    public function cost()
    {
        return 20;
    }
    public function addDecorator(ICondiment $condiment)
    {
        $this->_condiments[]=$condiment;
    }
    //计算总的价格
    public function total()
    {
        $cost=0;
        if(is_array($this->_condiments))
        {
            foreach ($this->_condiments as $condiment)
               $cost+=$condiment->cost() ;
        }
        return $cost+$this->cost();
    }
    //获取咖啡名
    public function coffeeName(){
        $name='';
        if(is_array($this->_condiments))
        {
            foreach ($this->_condiments as $condiment)
                $name.=$condiment->name() ;
        }
        return $name.'Coffee';
    }

}