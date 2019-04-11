<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Floating Point Numbers</title>
  </head>
  <body>

    <?php echo $float = 3.14; ?><br />
    <?php echo $float + 7; ?><br />
    <?php echo 4/3; ?><br />
<!-- You cannot divide by 0 -->
    <?php //echo 4/0; ?><br />
    <br />
    <!-- rounds down if less than .5 rounds up if greater than or equal to .5  -->
    Round:     <?php echo round($float, 1);   ?><br />
    <!-- always rounds up -->
    Ceiling:   <?php echo ceil($float);       ?><br />
    <!-- always rounds down -->
    Floor:     <?php echo floor($float);     ?><br />
    <br />
    
    <?php $integer = 3; ?>
    
    <!-- returns 1 if true or nothing if false -->
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
    <?php echo "Is {$float} integer? " . is_int($float); ?><br />
    <br />
    <?php echo "Is {$integer} float? " . is_float($integer); ?><br />
    <?php echo "Is {$float} float? " . is_float($float); ?><br />
    <br />
    <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
    <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br />
    <br />

  </body>
</html>
