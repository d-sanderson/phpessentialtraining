<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Return Values</title>
  </head>
  <body>
    <?php 
    function add($val1, $val2) {
        $sum = $val1 + $val2;
        //return will exit the function immediately
        return $sum;
    }
    //you have to declare a var to catch the return value
    $result1 = add(3, 4);
    $result2 = add(20, $result1);
    echo $result2;
    ?>

    <?php
function chineseZodiac($year) {
switch (($year - 4) % 12) {
    case  0: return 'Rat';     
    case  1: return 'Ox';       
    case  2: return 'Tiger';   
    case  3: return 'Rabbit';   
    case  4: return 'Dragon';   
    case  5: return 'Snake';   
    case  6: return 'Horse';   
    case  7: return 'Goat';     
    case  8: return 'Monkey';  
    case  9: return 'Rooster'; 
    case 10: return 'Dog';     
    case 11: return 'Pig';     
  }

}

$horse = chineseZodiac(1990);
echo "{$horse}";

//Its a good practice to rarely have functions which output from inside the function
//better to build up text in function, assign to variable, then return at the end. 
//leave echos out of your function, instead use return values.

function betterHello($greeting, $target, $punct) {

    return "{$greeting} {$target} {$punct} <br />";
  }

  $greet = betterHello('Hay', 'Dude', '!');
  echo $greet;
    ?>
  </body>
</html>
