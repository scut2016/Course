<?php
/**
 * 文件名：Config.php
  项目配置类
 */

namespace Core;

class Config implements \ArrayAccess
{
    protected $path;
    protected $configs=[];//保存配置的数组
    public function __construct($path)
    {
        $this->path=$path;
    }

    public function offsetExists($offset)
    {
        return isset($this->configs[$offset]);

    }
//自动执行的代码 
    public function offsetGet($offset)
    {
        if(empty($this->configs[$offset]))
        {
            $filePath=$this->path.'/'.$offset.'.php';
            $config=require($filePath);
            $this->configs[$offset]=$config;
        }
        return $this->configs[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->configs[$offset]=$value;
    }

    public function offsetUnset($offset)
    {
        unset($this->configs[$offset]);
    }

}