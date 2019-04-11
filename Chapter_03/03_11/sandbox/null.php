<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>NULL</title>
  </head>
  <body>

    <?php
    // Like booleans null is case-insensitive NULL or null can be used interchangeably.
    // null means a variable is lacking a value, undefined means that a variable has not been assigned a value.
      $var1 = null;
      $var2 = "";
    ?>
    var1 null? <?php echo is_null($var1); ?><br />
    var2 null? <?php echo is_null($var2); ?><br />
    var3 null? <?php echo is_null($var3); ?><br />
    <br />
    <!-- Has a variable been declared? isset checks this -->
    var1 is set? <?php echo isset($var1); ?><br />
    var2 is set? <?php echo isset($var2); ?><br />
    var3 is set? <?php echo isset($var3); ?><br />
    <br />
    
    <?php // empty: returns a boolean for whether a variable is empty. In PHP, empty can be any of these: "", null, 0, 0.0, "0", false, array() ?>
    
    <?php $var3 = "0"; ?>
    var1 empty? <?php echo empty($var1); ?><br />
    var2 empty? <?php echo empty($var2); ?><br />
    var3 empty? <?php echo empty($var3); ?><br />
    
  </body>
</html>
