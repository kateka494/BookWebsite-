<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
   <div class="content">
   <img src="images/jetbooks.png" alt="logo" height ="150px"/>

      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <a href="createTable.php" class="btn">Create user</a>
      <a href="loadBookStore.php" class="btn">Upload Book</a>
      <a href="index.php" class="btn">Dashboard</a>
      <p> 
         I am not addicted to reading, just one more chapter
      </P>
     
      <p> 
      <img src="images/book.png" alt="logo" height ="150px"/>

      </P>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>