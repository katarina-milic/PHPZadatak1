<?php
$connect = mysqli_connect("localhost", "root", "", "csv_db");
if(isset($_POST["title"], $_POST["author"], $_POST["pages"], $_POST["year"]))
{
 $title = mysqli_real_escape_string($connect, $_POST["title"]);
 $author = mysqli_real_escape_string($connect, $_POST["author"]);
 $pages = mysqli_real_escape_string($connect, $_POST["pages"]);
 $year = mysqli_real_escape_string($connect, $_POST["year"]);
 $query = "INSERT INTO book(title, author, pages, year) VALUES('$title', '$author', '$pages', '$year')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
