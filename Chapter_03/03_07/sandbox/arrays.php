<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title> The Power of Arrays</title>
  </head>
  <body>

   <!-- The POWER OF ARRAYS is that a set of info can be accessed through one single variable i.e a set of emails would be stored in and userEmail array -->
    <!-- Arrays are good for keeping ordered lists -->
    <?php
    
    // an array is an ordered collection of data types or objects
      $numbers = array(4,8,15,16,23,42);
    // returns the first index in the $numbers array (returns 4)  
      echo "{$numbers[0]}<br/>";
      
      echo $numbers[1];
    ?>
    <br />
    
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <!-- returns dog -->
    <?php echo $mixed[2]; ?><br /> 
    <!-- returns an array as a string PHP doesn't like this and will show an ERROR -->
    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />

    <!-- bracket notation allows you to access nested arrays returns y -->
    <?php echo $mixed[3][1]; ?><br />
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <!-- if you dont know how long the array is you can use empty brackets to add values to the end of an array -->
    <?php $mixed[] = "horse"; ?>

   
    
    <!-- pre tags will indent the array for you so it is easier to read -->
    <pre>
    <!-- print_r lets you see whats inside and array - this is useful for debugging -->
    <?php echo print_r($mixed); ?>
    </pre>
    
    <?php 
      //PHP 5.4 added the short array syntax.
      // Use the long form array( ) if you want to be backwords compatible
      $array = [1,2,3];
    ?>
    
  </body>
</html>
