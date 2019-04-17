<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Scope</title>
  </head>
  <body>
      <?php
        $bar = 'Outside';

        function foo() {
            //global allows you to bring global vars inside functions, be careful using this bc you will change the values of global variables
            global $bar;
            if(isset($bar)) {
            echo "foo: " . $bar . "<br />";
            }
            //local scope
            $bar = 'Inside';
        }

        //both will return Outside
        echo "1: " . $bar . "<br />";
        foo();
        echo "2: " . $bar . "<br />";
      ?>

  </body>
</html>
