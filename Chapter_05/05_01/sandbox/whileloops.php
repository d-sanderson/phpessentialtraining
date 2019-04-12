<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>While Loops</title>
  </head>
  <body>
  <?php

  if(!isset($count)) {
      $count = 0;
  }
  while ($count <= 10) {
    if ($count == 5) {
      echo "FIVE, ";
    }
      echo $count . ",";
      $count++;
  }
  echo "<br />";
  echo "Count: " . $count;
  ?>
<br />
<?php
  $count2 = 0;
  while ($count2 <= 10) {
    if($count2 % 2 == 0) {
      echo $count2 . " is even <br/>";
    }
    else {
      echo $count2 . " is odd <br/>";
    }
    $count2++;
  }
  ?>
  </body>
</html>
