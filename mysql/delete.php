<?php
//Get the ID FROM The Url
$id =$_GET['id'];
require('db_connect.php');

// SQL
$sql ="DELETE FROM clients WHERE id=$id";
//execute the query
if(mysqli_query($conn,$sql)){
  echo "Data deleted successfuly";
header('location:index.php');
}else{
  echo "Something went wrong";
}
?>