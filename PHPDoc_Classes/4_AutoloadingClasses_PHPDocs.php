<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPDocs: 4. Autoloading Classes</title>
</head>
<body>
<h2>4. Autoloading Classes</h2>
<p>
Many developers writing object-oriented applications create one PHP source file per class definition. <br>
One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class). <br>
<br>
In PHP 5, this is no longer necessary. The <b>spl_autoload_register()</b> function registers any number of autoloaders, <br>
enabling for classes and interfaces to be automatically loaded if they are currently not defined. <br> 
By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error. <br>
<br>
<b>Note:</b>  <br>
Autoloading is not available if using PHP in CLI interactive mode. <br>
</p>

<h2>Example #1 Autoload example</h2>

This example attempts to load the classes <b>MyClass1 and MyClass2</b>  from the files <b>MyClass1.php and MyClass2.php</b>  respectively. <br> <br> <br>


<?php




spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2(); 




$code = '<?php

spl_autoload_register(function ($class_name) {
    include $class_name . \'.php\';
});

$obj  = new MyClass1();
$obj2 = new MyClass2(); 

?>';

highlight_string($code);

?>
<br> <br>
<b>Example #3 Autoloading with exception handling for 5.3.0+</b> 
<br> <br>
This example throws an exception and demonstrates the try/catch block. <br>
<br>
<br> 
<?php






  

  $code = '<?php

spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});
try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}  
?>';
  
  highlight_string($code);
  


  spl_autoload_register(function ($name) {
    echo "<br><br><br> <b>Result:</b> Want to load $name.<br>";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "<br><br><br>";
}

?>


</body>
</html>
