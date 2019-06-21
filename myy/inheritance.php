<?php
  class Employee
 {
   private $name;
   private $dob;
   private $address;
   private $desig;
     /*public function __construct($name,$dob,$address,$desig)
      {
         $this->name=$name;
         $this->dob=$dob;
         $this->add=$add;
         $this->desig=$desig; 
        }
  */
   public function setName($name)
     {
       $this->name=$name;
      }
   public function getName()
      {
         return $this->name;//echo'in';
       }
    public function setDOB($dob)
     {
       $this->dob=$dob;
      }
   public function getDOB()
      {
         return $this->dob;
       }
   public function setAddress($address)
     {
       $this->add=$address;
      }
   public function getAddress()
      {
         return $this->add;
       }
    public function setDesig($desig)
     {
       $this->desig=$desig;
      }
   public function getDesig()
      {
         return $this->desig;
       }
    
 }
?>
