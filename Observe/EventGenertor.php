<?php
/**
 * 文件名：EventGenertor.php
 * 文件说明:
 * 编辑器： PhpStorm.
 * 作者: hengyueIT
 * 时间: 2016/10/10.10:21
 */

namespace Observe;

abstract class EventGenertor
{
    private $_observers=[];
    function addObserver(IObserve $observe)
    {
        $this->_observers[]=$observe;
    }
    function notify()
    {
        foreach($this->_observers as $observer)
        {
            $observer->update();
        }
    }
    
}