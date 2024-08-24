<?php

$connn = mysqli_connect('localhost','root','','bookstore');

if(!$connn){
  die('Connection Failed'.mysqli_connect_error());
}

?>