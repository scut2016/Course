<?php

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