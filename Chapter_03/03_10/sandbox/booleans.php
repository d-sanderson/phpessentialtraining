<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Booleans</title>
  </head>
  <body>

    <?php
    // Booleans are case-insensitive in PHP you can use True, true, False, or false.
      $result1 = true;
      $result2 = false;
    ?>
    Result1: <?php echo $result1; ?><br />
    Result2: <?php echo $result2; ?><br />
    
    result2 is boolean? <?php echo is_bool($result2); ?>
    <br />
    
    <?php
      $number = 3.14;
      if( is_float($number) ) {
        echo "It is a float. <br/>";
      } 
      $integer = 5;
      if ( is_int($integer)) {
        echo "It is an int";
      }
      else {
        echo 'Nope, not an integer';
      }
    
    ?>
  </body>
</html>
