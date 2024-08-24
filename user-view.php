<?php
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

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>View User Details
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
                
                    <div class="mb-3">
                        <label>Student name</label>
                        <p class="form-control">
                           <?= $user['name'];?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label>Student Username</label>
                        <p class="form-control">
                           <?= $user['username'];?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label>Student Number</label>
                        <p class="form-control">
                           <?= $user['studentnumber'];?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label>Student Password</label>
                        <p class="form-control">
                           <?= $user['password'];?>
                        </p>
                    </div>
                    <div class="mb-3">
                        <label>User Type</label>
                        <p class="form-control">
                           <?= $user['user_type'];?>
                        </p>
                    </div>
                    
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