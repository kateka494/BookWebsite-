<?php

$con = mysqli_connect('localhost','root','','bookstore');

if(!$con){
  die('Connection Failed'.mysqli_connect_error());
}

?>