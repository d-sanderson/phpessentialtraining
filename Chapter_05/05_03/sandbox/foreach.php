<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>ForEach Loops</title>
  </head>
  <body>
    <?php 
    //foreach loops allow you to loops through arrays
    $arr = [1, 4, 5, 2, 2, 4, 5, 6, 9 , 2];
    foreach ($arr as $value) {
    $arr[$value] = $value * 2;
    }


    $person = array("first_name" => "David", "last_name" => "S", "nick_name" => "Sandman", "location" => "Victory Hills");

    foreach ($person as $key => $value) {
        $key_nice = ucwords(str_replace("_", " ", $key));
        echo "{$key_nice}: {$value} <br />";
    }


    $prices = array(
        "New MacBook" => 1000,
        "Toilet Paper" => 5,
        "1 Month of Lynda" => 25,
        "Learning PHP" => null
    );

    foreach($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
            echo "$" . $price;
        }
        else {
            echo "Priceless!";
        }
        echo "<br />";
    }

    ?>
  </body>
</html>
