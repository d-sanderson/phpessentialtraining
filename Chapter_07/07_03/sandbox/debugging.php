<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body>
      <?php
      $number = 99;
      $string = "Bug?";
      $array = array(1 =>"Homepage", 2=> "About Us", 3 => "Services"); 

      var_dump($number);
      var_dump($string);
      var_dump($array) . "<br />"
    ?>
    <pre>
    <?php 
      print_r(get_defined_vars());
      ?>
    </pre>

    <?php
    function hay() {
        echo "Hay";
        var_dump(debug_backtrace());
    }
    ?>
    
    <pre>
    <?php hay(); ?>
    </pre>

    

    
  </body>
</html>
