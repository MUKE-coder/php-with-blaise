<?php
$username=$email=$website=$comment=$gender ="";
$usernameErr=$emailErr=$websiteErr=$commentErr=$genderErr ="";
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submitBtn'])){
  print_r($_POST);
  if(!empty($_POST['username'])){
    $username=validateInput($_POST['username']); 
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }else{
    $usernameErr="Username is required";
  };
  if(!empty($_POST['email'])){
    $email=validateInput($_POST['email']);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }else{
    $emailErr="Email is required";
  };
 if(!empty($_POST['website'])){
  $website=validateInput($_POST['website']);
  // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    $websiteErr = "Invalid URL";
  }
 }else{
  $websiteErr="Website is required";
 }
  if(!empty($_POST['comment'])){
    $comment=validateInput($_POST['comment']);
    
  }else{
    $commentErr="Comment is required";
  }
  if(!empty($_POST['gender'])){
    $gender =validateInput($_POST['gender']);
  }else{
    $genderErr="Gender is required";
  }
};
function validateInput($data){
  $data =trim($data);
  $data=stripslashes($data);
  $data =htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Form Validation</title>
</head>

<body>
  <h2>PHP FORM VALIDATION</h2>
  <form method="POST">
    <div class="form-field">
      <label for="name">Name</label>
      <input type="text" name="username">
      <p class="error"><?php if(isset($usernameErr))echo $usernameErr ?></p>
    </div>
    <div class="form-field">
      <label for="email">Email</label>
      <input type="text" name="email">
      <p class="error"><?php echo $emailErr ?></p>
    </div>
    <div class="form-field">
      <label for="website">Website</label>
      <input type="text" name="website">
      <p class="error"><?php echo $websiteErr ?></p>
    </div>
    <div class="form-field">
      <label for="comment">Comment</label>
      <textarea name="comment" cols="30" rows="5"></textarea>
      <p class="error"><?php echo $commentErr ?></p>
    </div>
    <div class="form-field">
      <label for="gender">Gender</label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="other">Other
      <p class="error"><?php echo $genderErr ?></p>
    </div>
    <button type="submit" name="submitBtn">Submit</button>
  </form>

  <section>
    <div class="results">
      <h4>Name:<?php echo $username ?></h4>
      <h4>Email:<?php echo $email ?></h4>
      <h4>Website:<?php echo $website ?></h4>
      <h4>Comment:<?php echo $comment ?></h4>
      <h4>Gender:<?php echo $gender ?></h4>
    </div>
  </section>
</body>

</html>