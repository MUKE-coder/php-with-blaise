<?php
// For Loop
// for($i=0; $i<=10; $i++){
//   echo $i*3 . "<br>";
// }

// While Loop
$x =0;
// while($x <10){
//   echo $x*3 . "<br>";
//   $x++;
// }

$numbers =[1,2,3,4,5,6,7,9];
// foreach($numbers as $num){
//   echo $num . '<br>';
// }
$cart =[
  "Item1","Item 2","Item 3"
];
$cartCount = count($cart);
// echo $cartCount;
$names =['john','joe','terry'];

// if(in_array('johns',$names)){
//   echo "John is in the array";
// }else{
//   echo "johns is NOT in the array";
// }
$fruits =[];
array_push($fruits,"apple","mangoes");

array_unshift($fruits,"Kiwi");

$non_teaching_staff=["john","joe","terry"];
$teaching_staff=["adam","Jane","Jolly"];
$staffAll =array_merge($non_teaching_staff,$teaching_staff);

//Spread operator
$staff =[...$non_teaching_staff,...$teaching_staff];
// print_r($staff);

$prices =[100,300,600,900,1500,1800];

$pricesAbove =array_filter($prices,function($price){
  return $price <1500;
});
$totalPrice =array_reduce($prices,function($acc,$current){
  return $acc + $current;
},0);
$maximum_price =array_reduce($prices,function($prev,$current){
  return $current >$prev ? $current:$prev;
},$prices[0]);
print_r($maximum_price);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>