<?php
$agent_name =$_GET['name'];
$agent_code =$_GET['agentCode'];
// print_r($_GET)

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h2>Welcome to Register Page</h2>
<h2>Recommended By: <?php echo $agent_name ?></h2>
<h2>Agent Code: <?php echo $agent_code ?></h2>
<h1>Fill in the Registration Form</h1>
<form action="results.php" method="GET">
  <input type="text" name="recommender" id="recommender" hidden value=" <?php echo $agent_name ?> ">
  <input type="text" name="recommender_code" id="recommender" hidden value=" <?php echo $agent_code ?> ">
  <div class="form-field">
    <label for="studentName">
      Student Name
    </label>
    <input type="text" name="student_name" id="studentName">
  </div>
  <div class="form-field">
    <label for="studentCourse">
      Student Course
    </label>
    <!-- <input type="text" name="student_course" id="studentCourse"> -->
    <select name="student_course" id="studentCourse">
      <option value="Web Design">Web Design</option>
      <option value="App Development">Web Design</option>
      <option value="Engineering">Engineering</option>
      <option value="Human Resource">Human Resource</option>
    </select>
  </div>
  <div class="form-field">
    <button type="submit">Submit</button>
  </div>
</form>

<body>

</body>

</html>