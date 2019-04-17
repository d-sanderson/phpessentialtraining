<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions Default</title>
  </head>
  <body>
      <?php

      //assign default values in args
      function paint($room = "bedroom", $color = "white") {
          return "The color of the {$room} is {$color}. <br />";
      }
      //null will overwrite default values, defaults will only take effect if no argument is given
      //not sending something and sending nothing(null) are not the same thing.
      echo paint("Kitchen", null);
      //required values should be listed first, defaults should be listed last.
      echo paint("Bathroom");

      ?>

  </body>
</html>
