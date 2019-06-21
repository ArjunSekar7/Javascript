<?php
  abstract class Vechicle {
          abstract function moveForward();
          public function start(){         {
             echo "Vechicle is Stated";
      
           }
	  public function stop(){
             echo "Vechicle is stopped";
      
           }
      }
  
  class Mobile extends Video{
        public function playVideo(){
          echo"Video is playing"; 
          }
      
      }
  $object=new Vechicle();
  $object->start();
  $object->moveForward();
  $object->stop();

?>
