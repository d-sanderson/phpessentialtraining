<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>String Functions</title>
  </head>
  <body>
  <?php
 $first = "The quick brown fox";
 $second = " jumped over the lazy dog.";
 
 //another way to do concatenation
 $sentence = $first;
 $sentence .= $second;

 echo $sentence; 
 ?> 
 <br/>
 <!-- Build in PHP functions for manipulating strings strtolower, strtoupper, ucfirst, and ucwords -->
 Lowercase: <?php echo strtolower($sentence); ?> <br/>
 Uppercase: <?php echo strtoupper($sentence); ?> <br/>
 Uppercase first: <?php echo ucfirst($sentence); ?> <br/>
 ALL CAPS: <?php echo ucwords($sentence); ?> <br />
 <br/>
 <!-- returns integer of string length including spaces -->
 Length: <?php echo strlen($sentence);?> <br />
 <!-- trims white space from argument  -->
 Trim: <?php echo "A" . trim(" B C D ") . "E"; ?> <br/>
 <!-- finds the word and everything else following the string -->
 Find: <?php echo strstr($sentence, "brown"); ?> <br />
 Replace: <?php echo str_replace("quick", "speedy", ($sentence)); ?> <br />
 <br />
 Repeat: <?php echo str_repeat($sentence, 5); ?> <br />
 Make substring: <?php echo substr($sentence, 5, 10); ?> <br />
 Find position: <?php echo strpos($sentence, "brown"); ?> <br />
 Find Character: <?php echo strchr($sentence, "z") ?> <br />
 </body>
</html>
