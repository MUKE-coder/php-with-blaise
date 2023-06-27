<?php 
$agentName =$_GET['agentName'];
$agentCode =$_GET['agentCode'];
$discount =$_GET['discount'];

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
  <form action="results.php" method="POST">
    <div class="form-field">
      <label for="">Agent Name</label>
      <input type="text" name="agent_name" value="<?php echo $agentName ?>">
    </div>
    <div class="form-field">
      <label for="">Agent Code</label>
      <input type="text" name="agent_code" value="<?php echo $agentCode ?>">
    </div>
    <div class="form-field">
      <label for="">Discount</label>
      <input type="text" name="discount" value="<?php echo $discount ?>">
    </div>
    <div class="form-field">
      <label for="">Client Name</label>
      <input type="text" name="client_name" id="client_name">
    </div>
    <div class="form-field">
      <label for="">Client Email</label>
      <input type="email" name="client_email" id="client_email" required>
    </div>
    <div class="form-field">
      <label for="service">Select Service</label>
      <select name="service">
        <option value="Web Design">Web Design</option>
        <option value="SEO">SEO</option>
        <option value="Coding">Coding</option>
        <option value="App Development">App Development</option>
      </select>
    </div>
    <button type="submit" name="submitBtn">Submit</button>
  </form>
</body>

</html>