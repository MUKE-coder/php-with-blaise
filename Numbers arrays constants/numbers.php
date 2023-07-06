<?php
define("PI",3.14);
define("HOST","localhost");
define("USER","admin");
define("PASSWORD","myPassword");
// echo PASSWORD;

$price =23308.3;
$formated_price=number_format($price,2);
// echo $formated_price;
// echo intval($price);
// echo floatval($price);
// echo strval($price)

$username ="Johnbaptist";
$message ="Good morning ladies and gentlemen, welcome home";
// echo strlen($username);
// if(strlen($username) >10){
//   echo "Your name is too long";
// }else{
//   echo "Your name is Okay";
// }
$messageWordCount =str_word_count($message);
$password ="MyPassword";
// echo strrev($username);
// echo strtolower($username);
// echo strtoupper($username);
echo md5($password);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Word Count : <?php echo $messageWordCount ?>/ 100</h2>
</body>

</html>