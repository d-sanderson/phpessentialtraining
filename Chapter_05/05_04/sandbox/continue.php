<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Continue</title>
    <?php 
    for($count = 0; $count <= 10; $count++) {
        //if count is even, then skip it
        if ($count % 2 == 0) {
        //as soon as the code gets to continue it starts the loop again
            continue;
        }
        echo $count . ",";
        //there is an implicit continue at the end of every loop
    }
    ?>
    
    <br />
   
    <?php
    //whats wrong with this?
    $count = 0;
    while($count <= 10) {
        //infinite loop because continue goes to top of the loops before the iterator cant add 1 to 5 i remains as 5 and the loop will endlessly repeat itself
        //you can fix this by using a for loop or add count++ above continue
        if($count == 5) { $count++; continue; }
        echo $count . ", ";
        $count++;
    }?>

    <br />

    <?php
    //loop inside a loop with continue
    for ($i = 0; $i <= 5; $i++) {
        //you can add an integer argument to continue to tell it which loops to skip
        if ($i % 2 == 0) { continue(1); } 
        for ($k=0; $k<=5; $k++) {
            // if k = 3 go to outer loop
            if($k == 3) { continue(2); }
            echo $i . "-" . $k . "<br />";
        }
    }
    ?> 
  </head>
  <body>

  </body>
</html>
