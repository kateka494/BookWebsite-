<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $studentnumber = mysqli_real_escape_string($conn, $_POST['studentnumber']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM tbluser WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(strlen($pass)&& strlen($cpass) >= 8){

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO tbluser(name, username, studentnumber, password, user_type) VALUES('$name','$username','$studentnumber','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
} else {
   $error[] = 'password too short! 8 characters';
}
 

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      
   <img src="images/jetbooks.png" alt="logo"/>

      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="username" name="username" required placeholder="enter your username">
      <input type="username" name="studentnumber" required placeholder="enter your student number">
      <input type="password" name="password" required placeholder="enter your password" >
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register" class="form-btn">
      <p>already have an account? <a href="login_form.php">login</a></p>
   </form>

</div>

</body>
</html>