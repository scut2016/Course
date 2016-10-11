<?php
namespace Core;
class AllStudent implements \Iterator
{
    protected $ids=[];//全部id
    protected $index;//指针索引
    public function __construct()
    {
        $db=Factory::createDb();
        $resource=$db->query("select id from student");
        $result=$resource->fetch_all(MYSQLI_ASSOC);
        $this->ids=$result;
    }

    public function current()
    {
        $id=$this->ids[$this->index]['id'];
        return Factory::getStudent($id);
    }

    public function next()
    {
        $this->index++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
//        return $this->index<count($this->ids);
        return isset($this->ids[$this->index]);
    }

    public function rewind()
    {
        $this->index=0;
    }



}