<?php
$name ="JB";
$blog_posts=["Blog1","Blog2"];

if(empty($name)){
  echo "Name is empty";
}else{
echo $name;
}

if(!empty($blog_posts)){
  echo $blog_posts[0];
}else{
  echo "No Posts";
}

$age =null;

$my_age =$age??20;
// echo $my_age;


//Functions
function calcAge($birthYear){
 $age =2023 -$birthYear;
//  echo "<script>alert($age)</script>"; 
}
calcAge(1990);

$multiply =fn($num1,$num2)=>$num1*$num2;

$result=$multiply(2,3);
echo "<h2>$result</h2>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Website</title>
</head>

<body>
  <h2>Variables</h2>
  <button>Get started</button>
  <a href="#">Google</a>
</body>

</html>