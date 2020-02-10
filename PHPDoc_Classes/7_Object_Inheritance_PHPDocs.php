<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Object Inheritance PHPDocs</title>
</head>
<body>

<h1>7 Object Inheritance</h1>    

<p>

Inheritance is a well-established programming principle, and PHP makes use of this principle in its object model. <br>
This principle will affect the way many classes and objects relate to one another. <br>
<br>
For example, when you extend a class, the subclass inherits all of the public and protected methods from the parent class.  <br>
Unless a class overrides those methods, they will retain their original functionality. <br>
<br>
This is useful for defining and abstracting functionality, and permits the implementation of additional functionality in  <br>
similar objects without the need to reimplement all of the shared functionality. <br>
<br>
<br>
<b> Note:</b> <br>
<br>
Unless autoloading is used, then classes must be defined before they are used. If a class extends another, then the parent class <br>
must be declared before the child class structure. This rule applies to classes that inherit other classes and interfaces. <br>
<br>

<b>Example #1 Inheritance Example</b>

</p>

<?php
  
$code = '<?php
class Foo
{
    public function printItem($string)
    {
        echo \'Foo: \' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo \'PHP is great.\' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo \'Bar: \' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem(\'baz\'); // Output: \'Foo: baz\'
$foo->printPHP();       // Output: \'PHP is great\' 
$bar->printItem(\'baz\'); // Output: \'Bar: baz\'
$bar->printPHP();       // Output: \'PHP is great\'
?>';
highlight_string($code);
echo "<br><br><br>";

class Foo {

    public function printItem($string)
    {
        return "Foo: " . $string;   
    }

    public function printPHP()
    {
        return "PHP is great: ";
    }    


}

class Bar extends Foo 
{
    public function printItem($string)
    {
        return "Bar: " . $string ;
    }
}


$foo = new Foo();

$bar = new Bar();

echo "<div style='color: #0dd052; font-size: xx-large'>" . $foo->printItem('baz') 

     . "<br>" .  $foo->printPHP() 

     . "<br>" .  $bar->printItem('baz') 

     . "<br>" .  $bar->printPHP() . "</div>";


?>


</body>
</html>