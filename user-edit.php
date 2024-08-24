<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User edit</title>
  </head>
  <body>
    

  <div class="container mt-3">
  <a href="admin_page.php"> 
    <img src="images/jetbooks.png" alt="logo" height ="150px"/> 
  </a>
    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Edit User
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">

            <?php
            if(isset($_GET['id']))
            {
              $user_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM tbluser WHERE id='$user_id' ";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                $user = mysqli_fetch_array($query_run);
                ?>
                
                <form action="code.php" method ="POST">
                 <input type="hidden" name="user_id" value="<?= $user['id'];?>">


                    <div class="mb-3">
                        <label>Student Name</label>
                        <input type="text" name = "name" value= "<?= $user['name'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Student Username</label>
                        <input type="text" name = "username" value= "<?= $user['username'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Student Number</label>
                        <input type="text" name = "studentnumber" value= "<?= $user['studentnumber'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Student Password</label>
                        <input type="password" name = "password" value= "<?= $user['password'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>User Type</label>
                        <input type="text" name = "user_type" value= "<?= $user['user_type'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <button type="submit" name="update_user"class="btn btn-primary">Verify User</button>
                    </div>
                    
                </form>
                
                <?php
              }
              else{
                echo "<h4>ID not found</h4>";
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
      


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>