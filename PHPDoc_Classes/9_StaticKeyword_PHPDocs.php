<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>9 Static Keyword - Classes PHPDocs</title> 
</head>
<body style="font-family: 'Open Sans', sans-serif;">

<h1 style="color: brown;">Static Keyword</h1>    

Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. <br> 
A property declared as static cannot be accessed with an instantiated class object (though a static method can). <br>
<br>
if no visibility declaration is used, then the property or method will be treated as if it was declared as public. <br>

<h2 style="color: brown;">Static methods</h2>

Because static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static. <br>
<br>

<h3>Example #1 Static method example</h3> 

<?php
  
$code = '<?php
  class Foo {
    public static function staticMethod()
    {
        echo "Calling Static Method.";     
    }      
  }
  Foo::staticMethod();

  $classname = "Foo";
  $classname::staticMethod();

?>';
highlight_string($code);

  class Foo {
    public static function staticMethod()
    {
        echo "Calling Static Method.";     
    }      
  }

  echo "<br><br><b style='color:brown'> Result: </b> <br>";
  
  Foo::staticMethod();

  echo "<br>";
  
  $classname = "Foo";
  $classname::staticMethod();

?>

<h2 style="color: brown;">Static properties</h2>

Static properties cannot be accessed through the object using the arrow operator <b>-></b>. <br>
<br>

Like any other PHP static variable, static properties may only be initialized using a literal or constant before PHP 5.6; expressions are not allowed. <br>
In PHP 5.6 and later, the same rules apply as const expressions: some limited expressions are possible, provided they can be evaluated at compile time. <br>
<br>
As of PHP 5.3.0, it's possible to reference the class using a variable. The variable's value cannot be a keyword (e.g. self, parent and static). <br>
<br>

<h3>Example #2 Static property example</h3>

<?php

$code1 = '<?php
    class Foo  
    {
        public static $my_static = \'foo\';

        public function staticValue()
        {
            return self::$my_static;
        }
    }

    class Bar extends Foo 
    {
        public function fooStaic()
        {
            return parent::$my_static;
        }
    }
    
    echo Foo::$my_static;
    $foo = new Foo();    
    echo $foo->staticValue();    
    echo $foo->my_static;    
    echo $foo::$my_static;
    echo Bar::$my_static;
    $bar = new Bar();
    echo$bar->fooStatic();

?>';
highlight_string($code1);

echo "<br><br><b style='color:brown'> Result: </b> <br>";

echo "<br>";

class Foo1  
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo1 
{
    public function fooStaic()
    {
        return parent::$my_static;
    }
}

echo "Foo::\$my_static: ".  Foo1::$my_static;
echo "<br>";
$foo = new Foo1();
echo "\$foo->staticValue(): " . $foo->staticValue();
echo "<br>";
echo "\$foo->my_static: " . $foo->my_static;
echo "<br>";
echo "\$foo::\$my_static: " . $foo::$my_static;
echo "<br>";
echo "Bar::\$my_static: " . Bar::$my_static;
$bar = new Bar();
echo "<br>";
echo "\$bar->fooStaic(): " . $bar->fooStaic();


?>


</body>
</html>