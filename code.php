<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_user']))
{
  $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

  $query = "DELETE FROM tbluser WHERE id='$user_id' ";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "User Deleted Successfuly";
    header("Location: index.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "User Not Deleted";
    header("Location: index.php");
    exit(0);
  }
}

if(isset($_POST['update_user']))
{
   $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $studentnumber = mysqli_real_escape_string($con, $_POST['studentnumber']);
   $pass = md5($_POST['password']);
   $user_type = $_POST['user_type'];

   $query= "UPDATE tbluser SET name='$name', username='$username', studentnumber='$studentnumber', password='$pass', user_type='$user_type' WHERE id='$user_id' ";
   $query_run = mysqli_query($con, $query);
   if($query_run)
   {
    $_SESSION['message'] = "User Verified Successfuly";
    header("Location: index.php");
    exit(0);
   }
   else
   {
    $_SESSION['message'] = "User Not Verified";
    header("Location: index.php");
    exit(0);
   }
}

if(isset($_POST['save_user'])){
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $studentnumber = mysqli_real_escape_string($con, $_POST['studentnumber']);
   $pass = md5($_POST['password']);
   $user_type = $_POST['user_type'];

   $query = "INSERT INTO tbluser(	name,username,studentnumber,password,user_type) VALUES('$name','$username','$studentnumber','$pass','$user_type')";

   $query_run = mysqli_query($con, $query);
   if($query_run){

    $_SESSION['message'] = "User Created Successfuly";
      header("Location: createTable.php");
      exit(0);
   }
   else 
   {
    $_SESSION['message'] = "User not Created";
    header("Location: createTable.php");
    exit(0);
   }
  
}
?>
