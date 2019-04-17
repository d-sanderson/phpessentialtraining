<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Break</title>
  </head>
  <body>
      <?php 
      for($count=0; $count <= 10; $count++) {
          if ($count == 5) {
              break;
          }
          echo " Count: {$count} <br/> ";
      }

            //loop inside a loop with continue
    for ($i = 0; $i <= 5; $i++) {
            //you can add an integer argument to continue to tell it which loops to skip
        if ($i % 2 == 0) { continue(1); } 
        for ($k=0; $k<=5; $k++) {
            // if k = 3 break out of the loop inner loop but the first loop i will keep iterating;
            //if you add 2 it will break out of the otter loop
            if($k == 3) { break(2); }
            echo $i . "-" . $k . "<br />";
        }
    }
      ?>
  </body>
</html>
