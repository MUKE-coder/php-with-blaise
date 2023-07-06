<?php
$page_title="Home";
date_default_timezone_set("Africa/Kampala");

echo "Today is " . date("Y/m/d") . "<br>";

include("./utils/header.php");
require("./functions/healper.php");

$sum =add(2,3);
echo $sum;

?>

<main>
  <h3>The time is <?php echo date("h:i:sa") ?></h3>
  <h1>Home Page</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum voluptatum doloremque quibusdam aspernatur esse
    consectetur. Excepturi modi molestiae eaque impedit! Repudiandae soluta expedita quia enim voluptas consequatur
    doloremque quo voluptatem!</p>
</main>

<?php
include("./utils/footer.php");
?>