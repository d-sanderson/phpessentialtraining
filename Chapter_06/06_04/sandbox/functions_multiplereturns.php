<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Multiple Returns</title>
  </head>
  <body>
    <?php 

    //functions only allow us to return on value 
    //BUT you can put them in an array to return multiple values!
    function add_subt($v1, $v2) {
      $add = $v1 + $v2;
      $subt = $v1 - $v2;
    //technically you are returning one value
      return array($add, $subt);
    }
    $resultarray = add_subt(10, 5);
    echo "Add: " . $resultarray[0] . "<br />";
    echo "Subtract: " . $resultarray[1] . "<br />";

    //list allows you to assign array indexes to variables use array + list to return multiple values out of your functions
    list($add_result, $subt_result) = add_subt(20, 7);
    echo "Add: " . $add_result . "<br />";
    echo "Subtract: " . $subt_result . "<br />";



  ?>

  </body>
</html>
