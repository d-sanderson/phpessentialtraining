<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>
  </head>
  <body>
    
    <?php $numbers = array(8,23,15,42,16,4); ?>
    
    Count:         <?php echo count($numbers); ?><br />
    Max value:     <?php echo max($numbers);   ?><br />
    Min value:     <?php echo min($numbers);   ?><br />
    Last Value:     <?php echo end($numbers);   ?><br />
    <br />
    <pre>
    <!-- the sort function sorts the $numbers array in place meaning $numbers = sort($numbers) is not necessary -->
    <!-- it also overrides the old numbers array and returns the sorted version -->
    Sort:          <?php sort($numbers);  print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    <!-- Turns an array in a string -->
    Implode:       <?php echo $num_string = implode(" * ", $numbers); ?><br />
    <!-- Turns a string into an array separated by value in first argument -->
    Explode:       <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />
    
    <!-- Returns 1 if true, nothing if false -->
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />

    <!-- REFERENCE https://www.php.net/manual/en/function.array-chunk.php -->
    <!-- array_push adds an element to the end of the array  
         array_pop removes an element from the end of an array
         array_shift adds an element to the beginning of the array
         array_unshift removes an element from the end of the array -->
    
    

  </body>
</html>
