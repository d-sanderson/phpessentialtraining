<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Strings</title>
  </head>
  <body>
  <?php
  
  echo "Hello World<br />";
  echo 'Hello World<br />';

  $greeting = "Hello";
  $target = "World";
  $phrase = $greeting . " " . $target;
  echo $phrase;
  ?>
  <br />
  <?php
  
  //use double quotes
  echo "$phrase Again<br />";
  //in place substitution doesn't work with single quotes in PHP
  echo '$phrase Again<br />';
  //best option for in place substitution if you dont want a space i.e $phaseAgain doesnt work
  echo "{$phrase}Again<br />";
  
  ?>

  </body>
</html>
