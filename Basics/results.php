<?php
print_r($_GET);
$course_link="";
$student_name =$_GET['student_name'];
$student_course=$_GET['student_course'];
$student_recommender=$_GET['recommender'];
$recommender_code=$_GET['recommender_code'];
if($student_course=="Engineering"){
  $course_link ="engineering.php";
}
if($student_course=="Human Resource"){
  $course_link ="hr.php";
}
//A waitiing for data from register.php
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
    <h3>Student Name:<?php echo $student_name ?> </h3>
    <h5>Student Course: <?php echo $student_course ?></h5>
    <h5>Recommender: <?php echo $student_recommender ?></h5>
    <h5>Recommender code: <?php echo $recommender_code ?></h5>

    <a href="<?php echo $course_link ?>">Click here to see the Class PAGE</a>
  </div>
</body>

</html>