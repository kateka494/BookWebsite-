<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Load Book</title>
  </head>
  <body>
    

  <div class="container mt-3">
    <?php include('message.php'); ?>
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Book Entry
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="newcon.php" method ="POST">

                <div class="mb-3">
                    <label>ISBN Number</label>
                    <input type="text" name = "isbn" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Book Title</label>
                    <input type="text" name = "booktitle" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Book Author</label>
                    <input type="text" name = "bookauthor" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Book year</label>
                    <input type="text" name = "bookyear" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Condition</label>
                    <input type="text" name = "bookcondition" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <input type="text" name = "bookdescription" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Cover</label>
                    <input type="file" name = "bookcover" class="form-control">
                </div>
                <div class="mb-3">
                  <button type="submit" name="save_book"class="btn btn-primary">Save Book</button>
                </div>
                
            </form>
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