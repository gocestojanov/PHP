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

</body>
</html>