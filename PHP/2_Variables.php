<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Variables - PHP Notes</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color: brown">Accessing A Variable Dynamically By Name (Variable variables)</h1>

Variables can be accessed via dynamic variable names. The name of a variable can be stored in another variable, <br>
allowing it to be accessed dynamically. Such variables are known as variable variables. <br> 
To turn a variable into a variable variable, you put an extra <b>$</b>  put in front of your variable. <br>
<br>

<?php
  
 $code = '<?php
 $variableName = \'foo\';
 $foo = \'bar\';

 echo $$variableName;
 echo ${$variableName};
 echo $foo;
 ?>';
 highlight_string($code);

 echo "<br><br><b style='color:brown'> Result: </b> <br>";
 

 $variableName = 'foo';
 $foo = 'bar';

 echo "$\$variableName : "  . $$variableName;
 echo "<br>";
 echo '${$variableName} : ' . ${$variableName};
 echo "<br>";
 echo "\$foo : " . $foo;
 echo "<br>";
echo "<br>Variable variables are useful for mapping function/method calls:";
echo "<br>";

$code1 = '<?php
    function add($a,$b)
    {
        return $a + $b;
    }

    $funName = \'add\';
    echo $funName(1,2);
?>';
highlight_string($code1);

 echo "<br><br><b style='color:brown'> Result: </b> <br>";
 

 function add($a,$b)
 {
     return $a + $b;
 }

 $funName = 'add';
 echo $funName(1,2);

?>

<h1 style="color: brown">Data Types</h1>

There are different data types for different purposes. PHP does not have explicit type definitions, but the type of a <br>
variable is determined by the type of the value that is assigned, or by the type that it is casted to. This is a brief <br>
overview about the types, for a detailed documentation and examples, see the PHP types topic. <br>
<br>
There are following data types in PHP: <b>null, boolean, integer, float, string, object, resource and array.</b>  <br>
<br>

<h3>Null</h3>

Null can be assigned to any variable. It represents a variable with no value. <br>

<?php

$code2 = '<?php
    $foo = null;
?>';
highlight_string($code2);
  
  echo "<br>";

  echo "<br>This invalidates the variable and it's value would be undefined or void if called. The variable is cleared from memory <br>
  and deleted by the garbage collector.";

  echo "<br>";

  echo "<br><h3>Boolean</h3>";


  echo "This is the simplest type with only two possible values. Booleans can be used to control the flow of code.<br>";

  $code3 = '<?php
  $foo = true;
  $bar = false;

  $foo = true;
    if ($foo) {
        echo "true";
    } else {
        echo "false";
    }  
  ?>';
  highlight_string($code3);

  echo "<br><h3>Integer</h3>";
  echo "<br>An integer is a whole number positive or negative. It can be in used with any number base. The size of an integer is <br>
  platform-dependent. PHP does not support unsigned integers.";
    echo "<br>";
  $code4 = '<?php
    $foo = -3; // negative
    $foo = 0; // zero (can also be null or false (as boolean)
    $foo = 123; // positive decimal
    $bar = 0123; // octal = 83 decimal
    $bar = 0xAB; // hexadecimal = 171 decimal
    $bar = 0b1010; // binary = 10 decimal
    var_dump(0123, 0xAB, 0b1010); // output: int(83) int(171) int(10)  
  ?>';
  highlight_string($code4);

  echo "<br><br><b style='color:brown'> Result: </b> <br>";

  $foo = -3;
  echo '<br>$foo : ' . $foo;  
  $foo = 0;
  echo '<br>$foo : ' . $foo;  
  $foo = 123;
  echo '<br>$foo : ' . $foo;    
  $bar = 0123;
  echo '<br>$bar : ' . $bar;  
  $bar = 0xAB;
  echo '<br>$bar : ' . $bar;  
  $bar = 0b1010;
  echo '<br>$bar : ' . $bar;  
  echo "<br>";
  var_dump(0123, 0xAB, 0b1010);

  echo "<br><h3>Float</h3>";

  echo "<br>Floating point numbers, doubles or simply called floats are decimal numbers.";
  echo "<br>";  

  $code5 = '<?php
    $foo = 1.23;
    $foo = 10.0;
    $bar = -INF;
    $bar = NAN;
  ?>';
  highlight_string($code5);

?>

</body>
</html>