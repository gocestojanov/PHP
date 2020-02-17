<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">        
    <title>24 String formatting - PHP Notes </title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color:brown;">String formatting</h1>

<h2>String interpolation</h2>

You can also use interpolation to interpolate (insert) a variable within a string. 
Interpolation works in double quoted strings and the heredoc syntax only. <br>

<?php

$code = '<?php
    $name = \'Joel\';  
    echo "<p>Hello $name, Nice to see you.</p>";
    echo \'Hello $name, Nice to see you.\'; 
?>';
highlight_string($code);
echo "<br><br><b style='color:brown'> Result: </b>  <br>"; 

$name = 'Joel';  
echo "<p>Hello $name, Nice to see you.</p>";
echo 'Hello $name, Nice to see you.'; 

?>
<hr    style="border-top: 2px solid brown;max-width: 50%; margin-left: 0px; margin-top: 25px;" >

<br><br><br>
The complex (curly) syntax format provides another option which requires that you wrap your variable within <br>
curly braces {}. This can be useful when embedding variables within textual content and helping to prevent <br>
possible ambiguity between textual content and variables. <br>
<br>
<?php

$code1 = '<?php
    $name = \'Joel\';  
    echo "<p>We need more {$name}s to help us!</p>";
    echo "<p>We need more $names to help us!</p>";
?>';
highlight_string($code1);
echo "<br><br><b style='color:brown'> Result: </b>  <br>"; 

$name1 = 'Joel';  
echo "<p>We need more {$name1}s to help us!</p>";
echo "<p>We need more $names to help us!</p>";
  
?>
<hr    style="border-top: 2px solid brown;max-width: 50%; margin-left: 0px; margin-top: 25px;" >

<br> <br> 
The {} syntax only interpolates variables starting with a $ into a string. The {} syntax does not evaluate arbitrary <br>
PHP expressions. <br>
<br>
<?php

$code2 = '<?php
    echo "1+2 = {1+2}" . "<br>";  
    define(\'HELLO_WORLD\', "Hello World!!!");
    echo "My Constant is {HELLO_WORLD}" . "<br>";  

    function say_hello()
    {
        return "Hello!";      
    }
    echo "I say: {say_hello()}";
?>';
highlight_string($code2);

  echo "<br><br><b style='color:brown'> Result: </b>  <br>";   
  echo "1+2 = {1+2}" . "<br>";  
  define('HELLO_WORLD', "Hello World!!!");
  echo "My Constant is {HELLO_WORLD}" . "<br>";  

  function say_hello()
  {
      return "Hello!";      
  }
  echo "I say: {say_hello()}";

?>
<hr    style="border-top: 2px solid brown;max-width: 50%; margin-left: 0px; margin-top: 25px;" >
<br> <br>
However, the {} syntax does evaluate any array access, property access and function/method calls on variables, <br>
array elements or properties: <br>

<?php

$code3 = '<?php
$companions = [0 => [ \'name\' => \'Amy Pond\'], 1 => [\'name\' => \'Dave Random\']];
echo "The best companion is {$companions[0][\'name\']}" . "<br>";

class Person  
{
    public function say_hello()
    {
        return "Hello!";
    }
}

$max = new Person();

echo "Max says: {$max->say_hello()}";

$greet = function ($num)
{
    return "A $num greetings!";
};

echo "<br>" . "From us all: {$greet(10**3)}";

?>';
highlight_string($code3);

    echo "<br><br><b style='color:brown'> Result: </b> <br>";
    

    $companions = [0 => [ 'name' => 'Amy Pond'], 1 => ['name' => 'Dave Random']];
    echo "The best companion is {$companions[0]['name']}" . "<br>";

    class Person  
    {
        public function say_hello()
        {
            return "Hello!";
        }
    }

    $max = new Person();

    echo "Max says: {$max->say_hello()}";

    $greet = function ($num)
    {
        return "A $num greetings!";
    };

    echo "<br>" . "From us all: {$greet(10**3)}";

?>
<hr    style="border-top: 2px solid brown;max-width: 50%; margin-left: 0px; margin-top: 25px;" >

<br> <br>
Notice that the dollar $ sign can appear after the opening curly brace { as the above examples, or, like in Perl or
Shell Script, can appear before it:
<br> <br>
<?php

$code4 = '<?php
    $name = \'Joel\';
    echo "<p>We need more ${name}s to help us!</p>";
?>';
highlight_string($code4);

    echo "<br><br><b style='color:brown'> Result: </b> <br>";
    
    $name = 'Joel';
    echo "<p>We need more ${name}s to help us!</p>";

?>

<h2 style="color:brown;">Extracting/replacing substrings</h2>

Single characters can be extracted using array (square brace) syntax as well as curly brace syntax.  <br>
These two syntaxes will only return a single character from the string. If more than one character is needed,  <br>
a function will be required, i.e.- <b>substr</b>  <br>
<br>
Strings, like everything in PHP, are 0-indexed. <br>

<?php
  
$code5 = '<?php

    $foo = \'Hello World!\';
    echo $foo[6];
    echo $foo{6};
    echo substr($foo,6,1);
    echo substr($foo,6,2);

?>';
highlight_string($code5);

    echo "<br><br><b style='color:brown'> Result: </b> <br>";    

    $foo = 'Hello World!';

    echo $foo[6] . "<br>";

    echo $foo{6} . "<br>";

    echo substr($foo,6,1) . "<br>";

    echo substr($foo,6,2) . "<br>";

?>
<br>
Strings can also be changed one character at a time using the same square brace and curly brace syntax. <br>
Replacing more than one character requires a function, i.e.- <b>substr_replace</b>  <br>
<br>

<?php
  $code6 = '<?php

  $foo = \'Hello world!\';
  echo $foo[6];
  echo $foo{6};
  echo substr($foo,6,1);
  echo substr($foo,6,2);

?>';
highlight_string($code6);

    echo "<br><br><b style='color:brown'> Result: </b> <br>";

    $foo1 = 'Hello world!';

    $foo1[6] = 'W' . "<br>";

    $foo1{6} = 'W'. "<br>";

    echo substr_replace($foo1, 'W', 6,1) . "<br>";

    echo substr_replace($foo1, 'Whi', 6,2) . "<br>";



?>

</body>
</html>