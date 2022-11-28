<?php
  define("HOST", "localhost");  
  define("USER", "root");
  define("PASSWORD", "");	  
  define("DATABASE", "project");

  $db = new mysqli(HOST, USER, PASSWORD, DATABASE); 
  $db->set_charset("utf8"); 

?>