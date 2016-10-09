<?php

namespace Factory;
abstract class AbstractUser implements IUser
{
    protected $name='';//用户姓名
    protected $discount=1;//折扣率
    protected $grade=1;//用户等级

    public function __construct($name)
    {
        $this->setName($name);

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getGrade()
    {
        return $this->grade;
    }

}