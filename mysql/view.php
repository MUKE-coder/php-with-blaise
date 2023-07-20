<?php 
//Get the ID FROM The Url
$id =$_GET['id'];
require('db_connect.php');
// Fetch data that belong to this id;
$sql ="SELECT * FROM clients WHERE id=$id ";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $row =mysqli_fetch_assoc($result);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h2>Client Detailed Data</h2>
    <a href="index.php">Go Back home</a>
  </header>

  <h3>Name : <?php echo $row['fullname'] ?> </h3>
  <h3>Email : <?php echo $row['email'] ?></h3>
</body>

</html>