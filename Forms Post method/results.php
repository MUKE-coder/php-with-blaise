<?php 
$baseQuote;
$quotation;
$agent_name=$agent_code=$discount=$client_name=$client_email=$service ="";
print_r($_POST);
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['submitBtn'])){
$agent_name =$_POST['agent_name'];
$agent_code=$_POST['agent_code'];
$discount =$_POST['discount'];
$client_name =$_POST['client_name'];
$client_email =$_POST['client_email'];
$service =$_POST['service'];
if($client_name=="" || $client_email=="" || $service==""){
  echo "<script>alert('All fields are required')</script>";
}
if($service=="Web Design"){
  $baseQuote =800000;
  $quotation =$discount*$baseQuote/100;
}
if($service=="SEO"){
  $baseQuote =900000;
  $quotation =$discount*$baseQuote/100;
}
if($service=="Coding"){
  $baseQuote =1200000;
  $quotation =$discount*$baseQuote/100;
}
if($service=="App Development"){
  $baseQuote =1600000;
  $quotation =$discount*$baseQuote/100;
}
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card">
    <h3>Agent Name: <?php echo $agent_name ?></h3>
    <h3>Agent Code: <?php echo $agent_code ?></h3>
    <h3>Discount: <?php echo $discount ?></h3>
    <h3>Client Name: <?php echo $client_name ?></h3>
    <h3>Client Email: <?php echo $client_email ?></h3>
    <h3>Service Needed: <?php echo $service ?></h3>
    <h2>Quotation is : <del><?php echo $baseQuote ?></del> <?php echo $quotation ?> </h2>
  </div>
</body>

</html>