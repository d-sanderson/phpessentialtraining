<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Integers</title>
  </head>
  <body>
    <?php
      $var1 = 3;
      $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    <br />
    <!-- returns absolute value of integer i.e -300 returns 300 -->
    Absolute value:   <?php echo abs(0 - 300);   ?><br />
    <!-- 2^8 -->
    Exponential:       <?php echo pow(2,8);       ?><br />
    <!-- returns square root of the number -->
    Square root:       <?php echo sqrt(100);     ?><br />
    <!-- returns division remainder -->
    Modulo:           <?php echo fmod(20,7);     ?><br />
    <!-- returns a random number -->
    Random:           <?php echo rand();         ?><br />
    <!-- returns random number within a range -->
    Random (min,max): <?php echo rand(1,10);     ?><br />
    <br />
    <!--  -->
    <?php echo $var2 ?> += : <?php $var2 += 4; echo $var2; ?><br />
    <?php echo $var2 ?> -= : <?php $var2 -= 4; echo $var2; ?><br />
    <?php echo $var2 ?> *= : <?php $var2 *= 3; echo $var2; ?><br />
    <?php echo $var2 ?> /= : <?php $var2 /= 4; echo $var2; ?><br />
    <br />
    <!-- handy ways to increment or decrement by 1 borrowed from C -->
    Increment: <?php $var2++; echo $var2; ?><br />
    Decrement: <?php $var2--; echo $var2; ?><br />
    <br />
    <?php
      // PHP will convert a string to an integer
      // but it is sloppy programming
      echo 1 + "2 houses";
    ?>
  </body>
</html>
