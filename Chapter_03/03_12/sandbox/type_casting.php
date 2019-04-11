<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Type Juggling and Type Casting</title>
  </head>
  <body>
    
    <h1>Type Juggling</h1>
    
    <br />
    <!-- Sloppy programming -->
    <?php $count = "2 cats"; ?>
    <!-- gettype is better than is_int is_bool etc -->
    Type: <?php echo gettype($count); ?><br />

    <?php $count += 3; ?>
    Type: <?php echo gettype($count); ?><br />


    <?php $array = [1];?>
    Type: <?php echo gettype($array); ?> <br />
    


    <?php $cats = "I have " . $count . " cats."; ?>
    Cats: <?php echo gettype($cats); ?><br />
    <br />
    
    Type Casting<br />
    <?php settype($count, "integer"); ?>
    count: <?php echo gettype($count); ?><br />
    
    <?php $count2 = (string) $count; ?>
    count: <?php echo gettype($count); ?><br />
    count2: <?php echo gettype($count2); ?><br />
    <br />
    
    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <!-- Explicit conversion rewrites variable $test1 to a string-->
    <?php settype($test1, "string"); ?>
    <!-- Implicit conversion doesnt change the value of the original variable-->
    <?php (string) $test2; ?>
    test1: <?php echo gettype($test1); ?><br />
    test2: <?php echo gettype($test2); ?><br />
    
  </body>
</html>
