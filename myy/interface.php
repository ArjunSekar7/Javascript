<?php
  interface Video
      {
         function playVideo(); 
         
       }
  interface Call
      {
           function makeCall();
        }
   interface Whatsapp extends Video,Call
      {
         function text();
          const msg="Message";
       }
  class Nokia implements Video,Call
     {
       function playVideo()
        {
          echo"<br>video is playing.";
         }
        function makeCall()
          {
           echo"<br>Calling .....";
          }
      }
  class Moto implements Whatsapp
       {
          function playVideo()
        {
          echo"<br>video call.";
         }
        function makeCall()
          {
           echo"<br>Calling ..... via whatsapp";
          }
         function text()
           {
             echo"<br>Text Msg";
             }
          }
     echo"Accessing interface const.<br>";
     echo Whatsapp::msg."<br>";
     echo"Multiple Interface implement";
     $obj=new Nokia();
     $obj->playVideo();
     $obj->makeCall();
     echo"<br>Extends interface";
     $obje=new Moto();
     $obje->playVideo();
     $obje->makeCall();
     $obje->text();
?>
