<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Scope Resolution Operator (::) - PHPDocs</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">

<h1 style="color: brown;">Scope Resolution Operator (::)</h1>

<p>
The Scope Resolution Operator (also called <b>Paamayim Nekudotayim</b>) or in simpler terms, the double colon, <br>
is a token that allows access to static, constant, and overridden properties or methods of a class. <br>
<br>
When referencing these items from outside the class definition, use the name of the class. <br>
<br>
As of PHP 5.3.0, it's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static). <br>
<br>
<b>Paamayim Nekudotayim</b> would, at first, seem like a strange choice for naming a double-colon.  <br>
However, while writing the Zend Engine 0.5 (which powers PHP 3), that's what the Zend team decided to call it. It actually does mean double-colon - in Hebrew!   <br>
<br>

<b style="color: brown;">Example #1 :: from outside the class definition</b>

</p>

<?php

$code = '<?php
class MyClass {
    const CONST_VALUE = \'A constant value\';
}

$classname = \'MyClass\';
echo $classname::CONST_VALUE; // As of PHP 5.3.0

echo MyClass::CONST_VALUE;
?>';
highlight_string($code);

    class MyClass  
    {
        const CONST_VALUE = 'A constant value';
    }
    

    $classname = 'MyClass';


    echo "<br><br><b style='color:brown'> Result: </b>  <br>"; 

    echo $classname::CONST_VALUE . "<br>"; 

    echo MyClass::CONST_VALUE . "<br>";

?>

<p>
    Three special keywords <b>self, parent and static </b> are used to access properties or methods from inside the class definition. <br> <br>

   <b style='color:brown;'> Example #2 :: from inside the class definition    </b> 

</p>

<?php
  $code1 = '
<?php
    class OtherClass extends MyClass
    {
    public static $my_static = \'static var\';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
    }

    $classname = \'OtherClass\';
    $classname::doubleColon(); // As of PHP 5.3.0

    OtherClass::doubleColon();
?>';
highlight_string($code1);

  class OtherClass extends MyClass 
  {
      public static $mystatic = 'static var';

      public static function doubleColon()
      {
          echo parent::CONST_VALUE . "<br>";
          echo self::$mystatic . "<br>";
      }
  }
  

  echo "<br><br><b style='color:brown'> Result: </b>  <br>"; 


  $classname = "OtherClass";
  $classname::doubleColon();

  OtherClass::doubleColon();

?>
<br>
<p>
    When an extending class overrides the parents definition of a method, PHP will not call the parent's method. <br>
    It's up to the extended class on whether or not the parent's method is called. This also applies  <br>
    to Constructors and Destructors, Overloading, and Magic method definitions. <br> <br>
</p>

<b style='color:brown;'> Example #3:  Calling a parent's method    </b> 
<br>
<?php
  
$code2 = '<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Override parent\'s definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>';
highlight_string($code2);

class MyClass1 {

    protected function myFunc()
    {
        echo "MyClass::myFunc()<br>";
    }

}

class OtherClass1 extends myClass1 
{
    public function myFunc()
    {
        parent::myFunc();
        echo "OtherClass::myFunc()<br>";
    }
}
echo "<br><br><b style='color:brown'> Result: </b>  <br>"; 

$class = new OtherClass1();
$class->myFunc();



?>

</body>
</html>