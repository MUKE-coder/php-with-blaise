<?php
require("db_connect.php");
$sql ="SELECT * FROM clients";
$result =mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h2>All Clients</h2>
    <a href="create.php">Create a New Client</a>
  </header>
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['fullname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td>
          <a href="edit.php?id=<?php echo $row['id'] ?>">edit</a>
          <a href="view.php?id=<?php echo $row['id'] ?>">View</a>
          <a href="delete.php?id=<?php echo $row['id'] ?>">delete</a>
        </td>
      </tr>
      <?php    }
      }; ?>
    </tbody>
  </table>
</body>

</html>