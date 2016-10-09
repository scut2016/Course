<?php
namespace Factory;
class UserFactory
{
    static function createUser($name='',$grade=1)
    {
        switch ($grade)
        {
            case 1:
                return new NormalUser($name);
                break;
            case 2:
                return new VIPUser($name);
                break;
            case 3:
                return new InnerUser($name);
                break;
            default:
                break;
        }
    }
}