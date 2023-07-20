<?php
$id =$_GET['id'];

require("db_connect.php");


// Fetch data that belong to this id;
$sql ="SELECT * FROM clients WHERE id=$id ";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  $row =mysqli_fetch_assoc($result);
}


// GET UPDATED FORM DETAILS
if(isset($_POST['updateBtn'])){
  print_r($_POST);
  $fullname =$_POST['fullname'];
  $email =$_POST['email'];
  // Validate
echo $fullname;
  // Query
  $sql = "UPDATE clients SET fullname='$fullname', email='$email' WHERE id=$id";

  //execute the Query
  if(mysqli_query($conn,$sql)){
    echo "Recorded Updated Successfully";
    header('location:index.php');
  }else{
    echo "Something went wrong ):";
  }


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
  <h2> Update Client</h2>
  <?php
  
  if(isset($success_msg)){
    echo $success_msg;
  }
  
  ?>
  <form method="POST">
    <label for="name">Full Name</label>
    <input type="text" name="fullname" value="<?php echo $row['fullname'] ?>">
    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo $row['email'] ?>">
    <input type="submit" name="updateBtn" value="Update">
  </form>
</body>


</html>