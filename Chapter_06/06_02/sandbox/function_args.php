<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Arguments</title>
  </head>
  <body>
      <?php 
      function sayHello($word) {
        echo "Hello {$word} <br />";
     }

     $name = 'John Doe';
     sayHello($name);
      ?>

      <?php
      function betterHello($greeting, $target, $punct) {

        echo "{$greeting} {$target} {$punct} <br />";
      }
      //php will convert null into a string, you can also use and empty string.
      //you can also set default values
      betterHello('Hola', $name, null)

      ?>

  </body>
</html>
