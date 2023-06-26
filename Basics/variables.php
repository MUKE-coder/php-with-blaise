<?php
$name ="John";
$age =30;
$isOrphan=true;
$numbers =[1,2,3,4,5,6];
$student_age=22;
// echo $name;
// echo gettype($age)
// var_dump($name);

// Concatenation
$first_name ="Muke";
$last_name="Johnbaptist";
// $full_name =$first_name . " " . $last_name;
$full_name ="{$first_name} {$last_name}";
// echo $full_name;

$cups_of_coffee=120;
$price_per_cup=2.5;
$total_revenue=$cups_of_coffee*$price_per_cup;
$message ="The total revenue of selling {$cups_of_coffee} cups of coffee each at $ {$price_per_cup} is {$total_revenue}";
// echo $message;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Website</title>
</head>

<body>
  <h2><?php echo $message ?></h2>
  <button>Get started</button>
  <a href="#">Google</a>
</body>

</html>