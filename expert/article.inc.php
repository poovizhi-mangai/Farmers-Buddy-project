<?php
include_once '../includes/dbh.inc.php';
session_start();
$author_fname=$_POST["fname"];
$author_lname=$_POST["lname"];
$article_title=$_POST["title"];
$article_describtion=$_POST["message"];
//$date=$_POST["date"];
$user_id=$_SESSION['id'];



//$sql="Insert into article (author_fname,author_lname) Values($author_fname,$author_lname);";
//mysqli_query($conn,$sql);

$sql = "INSERT INTO article (author_fname, author_lname, article_title, article_describtion, date, user_id)
VALUES ('$author_fname','$author_lname','$article_title','$article_describtion',now(),'$user_id')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully');
  window.location.href='index.1.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>