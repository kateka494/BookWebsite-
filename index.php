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

    <title>User details</title>
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
            <h4>User Details
            <a href="createTable.php" class="btn btn-primary float-end">Add user</a>
            </h4>
          </div>
          <div class="card-body">

              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Student Username</th>
                    <th>Student Number</th>
                    <th>User Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $query = "SELECT * FROM tbluser";
                      $query_run = mysqli_query($con, $query);
                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach($query_run as $student){
                            ?>
                            <tr>
                                <td><?= $student['id']; ?></td>
                                <td><?= $student['name']; ?></td>
                                <td><?= $student['username']; ?></td>
                                <td><?= $student['studentnumber']; ?></td>
                                <td><?= $student['user_type']; ?></td>
                                <td>
                                <a href="user-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View </a>
                                  <a href="user-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Verify </a>
                                  <form action="code.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_user" value="<?=$student['id'];?>" href="" class="btn btn-danger btn-sm">Delete </a>
                                  </form>
                                </td>
                            </tr>
                            
                            <?php
                          }
                      }
                      else
                      {
                          echo "No Records Found";
                      }
             
                  ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">

        <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Book Details
              <a href="loadBookStore.php" class="btn btn-primary float-end">Add Book</a>
            </h4>
          </div>
          <div class="card-body">

              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ISBN</th>
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Book Year</th>
                    <th>Condition</th>
                    <th>Description</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                      $query = "SELECT * FROM tblbooks";
                      $query_run = mysqli_query($con, $query);
                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach($query_run as $books){
                            ?>
                            <tr>
                                <td><?= $books['id']; ?></td>
                                <td><?= $books['isbn']; ?></td>
                                <td> 
                                <img width="100" src="images/<?= $books['cover']; ?>"><p> </p>
                                  <?= $books['title']; ?>
                                </td>
                                <td><?= $books['author']; ?></td>
                                <td><?= $books['year']; ?></td>
                                <td><?= $books['bcondition']; ?></td>
                                <td><?= $books['file']; ?></td>
                            
                                  
                                </td>

                                <td>
                                <a href="book-view.php?id=<?= $books['id']; ?>" class="btn btn-info btn-sm">View </a>
                                <p> </p>
                                <form action="newcon.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_user" value="<?=$books['id'];?>" href="" class="btn btn-danger btn-sm">Delete </button>
                                  </form>
                                  <p> </p>
                                  <a href="book-edit.php?id=<?= $books['id']; ?>" class="btn btn-success btn-sm">Update </a>
                                  
                                </td>
                            </tr>
                            
                            <?php
                          }
                      }
                      else
                      {
                          echo "No Records Found";
                      }
             
                  ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>