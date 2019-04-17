<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Funciones Defining</title>
  </head>
  <body>
      <?php 

    //take this code and store it for later. 
      function sayHi($name, $age) {
          echo "Hi {$name}, you are {$age} years old. <br />";
      }
    //invoking dat function
      sayHi('David', 29);

     function sayHello($word) {
        echo "Hello {$word}";
     }
     sayHello('Derper');
     //PHP 4 and 5 hoist functions to the top but it is a best practice to call/invoke a function AFTER it has been defined.

    /*  function sayHi() {
         echo "redefining a function is NOT ALLOWED";
      } 
    */
      ?>
      

  </body>
</html>
