<?php 
include("include.html");
echo"<br>";
echo"unknown include file";
include("in.html");//including unknown file
require("include.html");
require("in.html");//further will not execute
echo"require unknown";
 ?>  
  
