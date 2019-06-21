<?php
 class Student
 {
    private $dept;
    private $sec;
    private $name;
    
    public function getsec()
    {
        return $this->sec;
    }
    public function setsec($sec)
    {
        $this->sec = $sec;
    }
    public function get_dept()
    {
        return $this->dept;
    }
    public function set_dept($dept)
    {
        $this->dept = $dept;
    }
     public function get_name()
    {
        return $this->name;
    }
    public function set_name($name)
    {
        $this->name = $name;
    }
 }
 

?>
