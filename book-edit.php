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

    <title>Book edit</title>
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
            <h4>Edit Book
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">

            <?php
            if(isset($_GET['id']))
            {
              $book_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM tblbooks WHERE id='$book_id' ";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0)
              {
                $book = mysqli_fetch_array($query_run);
                ?>
                
                <form action="newcon.php" method ="POST">
                 <input type="hidden" name="book_id" value="<?= $book['id'];?>">


                    <div class="mb-3">
                        <label>Book ISBN</label>
                        <input type="text" name = "isbn" value= "<?= $book['isbn'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Book Title</label>
                        <input type="text" name = "title" value= "<?= $book['title'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Book Author</label>
                        <input type="text" name = "author" value= "<?= $book['author'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Book Year</label>
                        <input type="text" name = "year" value= "<?= $book['year'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Condition</label>
                        <input type="text" name = "year" value= "<?= $book['bcondition'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name = "year" value= "<?= $book['file'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Book Cover</label>
                        <input type="text" name = "year" value= "<?= $book['cover'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <button type="submit" name="update_book"class="btn btn-primary">Update Book</button>
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