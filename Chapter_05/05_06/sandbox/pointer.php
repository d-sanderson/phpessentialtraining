<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Pointers</title>
  </head>
  <body>

    <?php 

    $ages = array(4, 8, 15, 16, 23, 42);

    //current: current pointer value
    echo "1:" . current($ages) .  "<br />";

    //next: move the pointer forward
    //similar to using 'continue' inside a loop now it point to 8
    next($ages);
    echo "2: " . current($ages) . "<br />";
    //15
    next($ages);
    echo "3: " . current($ages) . "<br />";
    //16
    next($ages);
    echo "4: " . current($ages) . "<br />";
    //15
    prev($ages);
    echo "5: " . current($ages) . "<br />";
    //points to ending value of array
    end($ages);
    echo "6: " . current($ages) . "<br />";
    //points to beginning value of array
    reset($ages);
    echo "1: " . current($ages) . "<br />";
    //if you next after the end of the array it will return null

    

    ?>
    <br />

    <?php 
    // while loops that moves the array pointer
    //similar to foreach except you can use it on DB records
    //assignment of age variable as current value in ages array
    while($age = current($ages)) {
        echo $age . ",  ";
        next($ages);
    }
    ?>      
  </body>
</html>
