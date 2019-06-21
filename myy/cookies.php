<?php
 setcookie("user_name","newuser",time()+300,'/');
 echo 'The cookie is for Five Minutes.<br>';
 print_r($_COOKIE);
 echo "$-cookie .<br>";
 echo $_COOKIE;
 echo '$-COOKIE[] .<br>';
 echo $_COOKIE["user_name"];
?>
