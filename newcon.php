<?php
session_start();
require 'condb.php';

if(isset($_POST['delete_user']))
{
  $book_id = mysqli_real_escape_string($connn, $_POST['delete_user']);

  $query = "DELETE FROM tblbooks WHERE id='$book_id' ";
  $query_run = mysqli_query($connn, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Book Deleted Successfuly";
    header("Location: index.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Book Not Deleted";
    header("Location: index.php");
    exit(0);
  }
}

if(isset($_POST['update_book']))
{
   $book_id = mysqli_real_escape_string($connn, $_POST['book_id']);

   $isbn = mysqli_real_escape_string($connn, $_POST['isbn']);
   $booktitle = mysqli_real_escape_string($connn, $_POST['title']);
   $bookauthor = mysqli_real_escape_string($connn, $_POST['author']);
   $bookyear = mysqli_real_escape_string($connn, $_POST['year']);

   $query= "UPDATE tblbooks SET isbn='$isbn', title='$booktitle', author='$bookauthor', year='$bookyear' WHERE id='$book_id' ";
   $query_run = mysqli_query($connn, $query);
   if($query_run)
   {
    $_SESSION['message'] = "Book Updated Successfuly";
    header("Location: index.php");
    exit(0);
   }
   else
   {
    $_SESSION['message'] = "Book Not Updated";
    header("Location: index.php");
    exit(0);
   }
}

if(isset($_POST['save_book'])){
   $isbn = mysqli_real_escape_string($connn, $_POST['isbn']);
   $booktitle = mysqli_real_escape_string($connn, $_POST['booktitle']);
   $bookauthor = mysqli_real_escape_string($connn, $_POST['bookauthor']);
   $bookyear = mysqli_real_escape_string($connn, $_POST['bookyear']);
   $condition = mysqli_real_escape_string($connn, $_POST['bookcondition']);
   $cover = mysqli_real_escape_string($connn, $_POST['bookcover']);
   $description = mysqli_real_escape_string($connn, $_POST['bookdescription']);
   

   $query = "INSERT INTO tblbooks( isbn,title,author,year,bcondition,cover,file) VALUES('$isbn','$booktitle','$bookauthor','$bookyear','$condition','$cover','$description')";

   $query_run = mysqli_query($connn, $query);
   if($query_run){

    $_SESSION['message'] = "Book Added Successfuly";
      header("Location: index.php");
      exit(0);
   }
   else 
   {
    $_SESSION['message'] = "Book not added";
    header("Location: loadBookStore.php");
    exit(0);
   }
  
}
?>
