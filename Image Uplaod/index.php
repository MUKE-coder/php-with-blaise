<?php
$imagErr ="";
if(isset($_POST['submitBtn'])){
if(isset($_FILES['profile']) && $_FILES['profile']['error']==0 ){
  if(!file_exists('Uploads')){
    mkdir("Uploads");
  }
  $temp_path =$_FILES['profile']['tmp_name'];
  //Concatenating unique id with image name
  $unique_file_name=uniqid()."_".$_FILES['profile']['name'];
  // echo $unique_file_name;
  $path ="Uploads/".$unique_file_name;
  // echo $path;
  // Image size
  $image_size =$_FILES['profile']['size'];
  // echo $image_size;
  if($image_size>1048576){
    $imagErr = "Image should be less than 1MB";
  }
  $image_type=$_FILES['profile']['type'];
  $allowed_extensions = array("image/webp", "image/png", "image/jpg", "image/jpeg");
  if(in_array($image_type,$allowed_extensions)){
   move_uploaded_file($temp_path,$path);

  }else{
    $imagErr="Invalid file type. Only webp, png, jpg, and jpeg files are allowed.";
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Image Upload</title>
</head>

<body>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="profile">
    <p class="error">
      <?php echo  $imagErr  ?>
    </p>
    <input type="submit" value="Upload Image" name="submitBtn">
  </form>
  <div class="container">
    <?php if(isset($path)){ ?>
    <img src=<?php echo $path ?> alt="">
    <?php } ?>
  </div>
</body>

</html>