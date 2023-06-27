<?php
$agent_name ="Blaise";
$agent_code="20030J";
$discount =10;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <a
    href="register.php?agentName=<?php echo $agent_name?>&&agentCode=<?php echo $agent_code?>&& discount=<?php echo $discount?>">Register
    Here</a>
</body>

</html>