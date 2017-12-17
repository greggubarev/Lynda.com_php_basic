<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lynda.com php lessons</title>
  </head>
  <body>
    <?php echo "<h2>Lynda.com php lessons</h2>" ?>

    <?php echo "Hello world"; ?>
    <br>
    <?php echo "Hello" . " world"; ?>
    <br>
    <?php echo 2+3; ?>
    <?php
      //comment
      #comment1
     ?>
     <?php
      $var1 = 1;
      echo $var1;
      echo "<br />";

      $var2 = "Hello world";
      echo $var2;
      ?>
      <?php
        echo "Hello World";

        $greeting = "Hello";
        $target = "World";
        $phrase = $greeting . " " . $target;
        echo $phrase;
        echo "{$phrase}Again<br />";
       ?>
       <?php
            $var3 = 3;
            $var4 = 4;
        ?>
        Basic math: <?php echo((1+2+$var4)-$var3); ?>
        <br />
        Random: <?php echo rand(1,100); ?><br />
        += : <?php $var1 += 4; echo $var1; ?><br />
        -= : <?php $var2 -= 4; echo $var2; ?><br />
        *= : <?php $var3 *= 4; echo $var3; ?><br />
        /= : <?php $var4 += 4; echo $var4; ?><br />
          Increment: <?php $var2++; echo $var2; ?><br />
          Decrement: <?php $var3--; echo $var3; ?><br />
          <?php echo $float = 3.14; ?><br />
          <?php echo $float+7 ?><br />
          <?php echo $float/4; ?><br />
          round: <?php echo round($float, 1); ?><br />
          Ceil: <?php echo ceil($float); ?><br />
            <?php
              $numbers = array(4,8,array(15,"x","dog",2+1),16,23,42);
                echo $numbers[1];
                echo print_r($numbers);
                $numbers[2][2] = "cat";
             ?><br />
             <?php echo $numbers[2][2]; ?><br />
              <?php $assoc = array("first_name" => "Kevin", "last_name" => "Gubarev"); ?>
              <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
              <?php $assoc["first_name"] = "Larry"; ?><br />
              <?php $numbers_array = array(8,23,14,42,16,4); ?>
              Count:      <?php echo Count($numbers_array); ?><br />
              Max:      <?php echo max($numbers_array); ?><br />
              Min:      <?php echo min($numbers_array); ?><br />
              Sort:      <?php echo sort($numbers_array); print_r($numbers_array); ?><br />
              Rsort:      <?php echo rsort($numbers_array); print_r($numbers_array); ?><br />
              Implode: <?php echo $num_string = implode("*", $numbers_array); ?><br />
              Implode: <?php print_r(explode(" * ", $num_string)); ?><br />
              23 in array? <?php echo in_array(23, $numbers_array); ?><br />
<?php
$result1 = true;
      $result2 = false;
      ?>
        Result 1: <?php echo $result1; ?><br />
        Result 2: <?php echo $result2; ?><br />
<?php
  $number = 3.14;
  if( is_float($number) ) {
    echo "It is a float.";
  }
 ?>
 <?php
   $var1 = null;
   $var2 = "";
   if( is_null($var1) ) {
     echo "It is a null.";
   }
   if( is_null($var2) ) {
     echo "It is a null.";
   }
   if( is_null($var3) ) {
     echo "It is a null.";
   }
   if( $var1 === $var2 ) {
     echo "It is a equal.";
   } else {
     echo "It is not a equal.";
   }
  ?><br>
Type Juggling<br>
<?php $count = "2"; ?>
Type <?php echo gettype($count); ?><br>
<?php $count += 3; ?>
Type <?php echo gettype($count); ?><br>
<?php $cats = "I have " .$count . " cats."; ?>
Cats: <?php echo gettype($cats); ?><br>
<?php $count2 = (string) $count; ?>
  <?php echo $count2; ?><br>
  <?php $test1 = 3; ?>
  <?php $test2 = 3; ?>
  <?php settype($test1, "string"); ?>
  <?php (string) $test2; ?>
  Type 1: <?php echo gettype($test1); ?><br>
  Type 2: <?php echo gettype($test2); ?><br>

<?php echo "<h2>Lesson thirty seven </h2>" ?>
 <br>
  <?php // can`t even redefine it
    $max_width = 980;

    define("MAX_WIDTH", 981);
    echo MAX_WIDTH;
   ?><br>
   <?php //can`t change the value
    // MAX_WIDTH = MAX_WIDTH + 1;
    ?><br>

<?php echo "<h2>Lesson thirty eight </h2>" ?>
<br>
    <?php
        $a = 4;
        $b = 3;

        if ($a > $b) {
          echo "a is larger than b";
        }
     ?><br>
     <?php
        $new_user = true;
          if ($new_user) {
            echo "Welcome";
          }
      ?><br>
      <?php
          $num = 20;
          $denum = 0;
          $result = 0;
            if ($denum > 0) {
              $result = $num / $denum;
            }
            echo "Result: {$result}";
       ?>
       <?php echo "<h2>Lesson thirty nine</h2>" ?><br>
       <?php
           $a = 4;
           $b = 3;

           if ($a > $b) {
             echo "a is larger than b";
           } elseif ($a < $b) {
             echo "a is smaller than b";
           } else {
             echo "a is equal to b";
           }
           ?>
<?php echo "<h2>Lesson fourty</h2>" ?><br>
<?php
  if (!isset($e)) {
    $e = 200;
  }
    echo $e;
 ?>
 <?php echo "<h2>Lesson fourty one</h2>" ?><br>
    <?php
      $a = 8;

      switch ($a) {
        case 0:
          echo "a equals 0 <br>";
          break;
          case 1:
            echo "a equals 1 <br>";
            break;
            case 2:
              echo "a equals 2 <br>";
              break;
              case 3:
                echo "a equals 3 <br>";
                break;
                default:
                echo "a is not equal 0,1,2, or 3<br>";
      }
     ?>
     <?php
        $year = 2013;

        switch (($year - rand(1,5)) % 12) {
          case 0: $zodiac = "Rat";           break;
          case 1: $zodiac = "Horse";         break;
          case 2: $zodiac = "Mouse";         break;
          case 3: $zodiac = "Elephant";      break;
          case 4: $zodiac = "Cat";           break;
          case 5: $zodiac = "Dog";           break;
          case 6: $zodiac = "Chicken";       break;
        }
        echo "{$year} is the year of the {$zodiac}.<br>";
      ?><br>
<?php echo "<h2>Lesson fourty two</h2>" ?><br>
        <?php
          $count = 0;
          while ($count <= 10) {
            if ($count == 5) {
              echo "<br>FIVE, <br>";
            } else {
              echo $count . ", ";
            }
            $count++; //increment by 1
          }
          echo "<br>";
          echo "Count: {$count}";
         ?><br>
 <?php echo "<h2>Lesson fourty three - Loops: for</h2>" ?><br>
  <?php
    $count = 0;
      while ($count <= 10) {
        echo $count . ", ";
        $count++;
      }
   ?><br>
   <?php
    for ($count = 0; $count <= 10; $count++) {
    echo $count . ", ";
    }
    ?><br>
    <?php
      for ($count=20; $count > 0; $count --) {
        if ($count % 2 == 0) {
          echo "{$count} is even<br>";
        } else {
          echo "{$count} is odd<br>";
        }
      }
     ?>
<?php echo "<h2>Lesson fourty four - Loops: foreach</h2>" ?><br>
  <?php
    $ages = array(4,8,15,16,23,42);

      foreach ($ages as $age) {
        echo "Age: {$age}<br>";
      }
   ?><br>
  <?php
    $person = array(
                  "first_name" => "Gregory",
                  "last_name" => "Gubarev",
                  "address" => "123 Main Street",
                  "city" => "NY",
                  "state" => "NY",
                  "zip_code" => "90210"
                );
      foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace("_", " ", $attribute));
        echo "{$attr_nice}: {$data}<br>";
      }
   ?><br>
<?php echo "<h2>Lesson fourty five - Continue</h2>" ?><br>
  <?php
    for ($count = 0; $count <= 10; $count++) {
      if ($count % 2 == 0) {
        continue;
      }
      echo $count . ", ";
    }
   ?>
   <?php
    for ($i=0; $i <=5 ; $i++) {
      if ($i % 2 == 0) {
        continue(1);
      }
        for ($k=0; $k <=5 ; $k++) {
          if ($k == 3) {
            continue(2);
          }
          echo $i . "-" . $k . "<br>";
        }
    }
    ?>
<?php echo "<h2>Lesson fourty six - Break</h2>" ?><br>
<?php
  for ($count = 0; $count <= 10; $count++) {
    if ($count == 5) {
      break;
    }
    echo $count . ", ";
  }
 ?>
 <?php
  for ($i=0; $i <=5 ; $i++) {
    if ($i % 2 == 0) {
      continue(1);
    }
      for ($k=0; $k <=5 ; $k++) {
        if ($k == 3) {
          break(2);
        }
        echo $i . "-" . $k . "<br>";
      }
  }
  ?>
<?php echo "<h2>Lesson fourty seven - Array Pointers</h2>" ?><br>
  <?php

    $ages = array(4,8,15,16,23,42);

    //current: current pointer value

    echo "1: " . current($ages) . "<br>";

    //next: move the pointer forward
    next($ages);
    echo "2: " . current($ages) . "<br>";

    prev($ages);
    echo "3: " . current($ages) . "<br>";

    reset($ages);
    echo "4: " . current($ages) . "<br>";

    end($ages);
    echo "5: " . current($ages) . "<br>";
   ?><br>
   <?php
    reset($ages);
      while ($age = current($ages)) {
        echo $age . ", ";
        next($ages);
      }
    ?><br>
<?php echo "<h2>Lesson fourty eight - Defining Functions</h2>" ?><br>
  <?php

    function say_hello() {
      echo "Hello World!<br>";
    }
    say_hello();

    function say_hello2($word) {
      echo "Hello {$word}!<br>";
    }
    say_hello2("World");
    say_hello2("Everyone");

    function say_hello_loudly() {
      echo "HELLO WORLD!<br>";
    }
    say_hello_loudly();
   ?><br>
   <?php echo "<h2>Lesson fourty nine - Function Arguments</h2>" ?><br>
    <?php
      function say_hello3($word) {
        echo "Hello {$word}!<br>";
      }
      $name = "John Doe";
      say_hello3($name);
     ?>
      <?php

        function better_hello($greeting, $target, $punct) {
          echo $greeting . " " . $target . $punct . "<br>";
        }
          better_hello("Hello", $name, "!");
          better_hello("Greetings", $name, "!!!");
          better_hello("Greetings", $name, null);
       ?><br>
<?php echo "<h2>Lesson fifty - Returning Vakues from a Function</h2>" ?><br>

  </body>
</html>
