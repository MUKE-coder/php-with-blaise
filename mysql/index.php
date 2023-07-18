<?php
require("db_connect.php");
$success_msg;
if(isset($_POST['submitBtn'])){
  $fullname =$_POST['fullname'];
  $email =$_POST['email'];
  //Validate

  // DATABASE
  // 1) SQL STATEMENT
  $sql ="INSERT INTO clients (fullname,email) VALUES('$fullname','$email')";

  //run the sql
  if(mysqli_query($conn,$sql)){
   $success_msg="New recorded added to db";
  }else{
    echo "Something went wrong".mysqli_error($conn);
  };
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2> Mysql Database</h2>
  <?php
  
  if(isset($success_msg)){
    echo $success_msg;
  }
  
  ?>
</body>
<form method="POST">
  <label for="name">Full Name</label>
  <input type="text" name="fullname" id="">
  <label for="email">Email</label>
  <input type="email" name="email" id="">
  <input type="submit" name="submitBtn" value="Submit">
</form>

</html>