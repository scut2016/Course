<?php
/**
 * 文件名：Single.php
    单例模式类
 */
// 三私一公

namespace Core;
final class MySQLi
{
    private static $db=null;
    private $conn;
    //第一步 构造函数私有
    private function __construct()
    {
       $this->conn=new \mysqli('127.0.0.1','root','root','train');

        if($this->conn->connect_errno)
            die( '连接数据库失败'.$this->conn->connect_error);
        else
            $this->conn->set_charset('utf8');
    }
    //第二步 外部调用的静态方法
    static function getDb()
    {
        if(self::$db==null)
            self::$db=new self();
        return self::$db;
    }
    //第三步  防止外部克隆
    private function __clone()
    {

    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }
   function __destruct()
   {
       $this->conn->close();
   }

}