<?php

namespace Decorator;

class Milk implements ICondiment
{
    function cost()
    {
       return 15;
    }

    function name()
    {
        return "Milk";
    }

}