<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Associative Arrays</title>
  </head>
  
  <body>
    <!-- An associative array is an object-indexed collection of objects indexed by a label instead of a number -->
    <!-- the label is the key the content of what is inside is the value these make up key-value pairs-->
    <!-- When order matters use an ARRAY when order is not important and you want the convenience of a label to refer to use and associative array  -->
    <?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $myAssocArray = array("first_name" => "David", "last_name" => "S.", "dogs" => array("oldest_dog" =>"Patch", "youngest_dog" => "Comet")); ?>
    <?php echo "<br/>
    {$myAssocArray["dogs"]["oldest_dog"]}
    <br/>"; ?> 
    <?php echo $myAssocArray["first_name"] . " has " .  count($myAssocArray["dogs"]) . " dogs and their names are " . $myAssocArray["dogs"]["oldest_dog"] . " and " . "{$myAssocArray["dogs"]["youngest_dog"]}<br />"    ?>

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
    
    <?php // echo $assoc[0]; ?><br />
    <!-- implicit that index increment from 0 and up -->
    <?php $numbers = array(4,8,15,16,23,42); ?>
    <!-- allows you to explicity set which index each value gets -->
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>
    
  </body>
</html>
