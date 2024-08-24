<?php

@include 'config.php';

session_start();

//if statement that allows output 
if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $studentnumber = mysqli_real_escape_string($conn, $_POST['studentnumber']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM tbluser WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'Not Verified Yet!⏳';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
   
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
 
<div class="form-container">

   <form action="" method="post">

   <img src="images/jetbooks.png" alt="logo"/>
      
      <h3>login here</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="username" name="username" required placeholder="enter your username">
      <input type="username" name="studentnumber" required placeholder="enter your student number">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register</a></p>
   </form>

</div>

</body>
</html>