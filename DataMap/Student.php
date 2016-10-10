<?php
namespace DataMap;
use Core\Factory;

class Student
{
    public $id;
    public $stu_id;
    public $stu_name;
    public $class_id;
    public $db=null;
    
    function __construct($id)
    {
        $this->db=Factory::createDb();
        $res=$this->db->query("select * from student where id=$id");
        $data=$res->fetch_assoc();
        $this->id=$id;
        $this->stu_id=$data['stu_id'];
        $this->stu_name=$data['stu_name'];
        $this->class_id=$data['class_id'];
    }
    function save()
    {
        $sql="update student set stu_id='{$this->stu_id}',stu_name='{$this->stu_name}',class_id='{$this->class_id}' where id='{$this->id}'";
        $this->db->query($sql);
    }
    
   

}