<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visibility PHPDocs</title>
</head>
<body>

<h1>6 Visibility</h1>

<p>
The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, <br>
protected or private. Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class <br> 
itself and by inheriting and parent classes. Members declared as private may only be accessed by the class that defines the member. <br>

<h2>Property Visibility</h2>

Class properties must be defined as public, private, or protected. If declared using var, the property will be defined as public. <br>
<br>
<b> Example #1 Property declaration</b>
<br>
</p>


<?php

$code = '<?php
/**
 * Define MyClass
 */
class MyClass
{
    public $public = \'Public\';
    protected $protected = \'Protected\';
    private $private = \'Private\';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = \'Public2\';
    protected $protected = \'Protected2\';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
echo $obj2->protected; // Fatal Error
echo $obj2->private; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined
?>';
highlight_string($code);


/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

$obj = new MyClass();
echo  "<br><br>" . $obj->public . "<br>"; // Works
// echo $obj->protected; // Fatal Error
// echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
        echo $this->private . "<br>";
    }
}

$obj2 = new MyClass2();
echo $obj2->public . "<br>"; // Works
// echo $obj2->protected . "<br>"; // Fatal Error
echo $obj2->private . "<br>"; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined'

?>

<p>

<h2> Method Visibility</h2>

Class methods may be defined as public, private, or protected. Methods declared without any explicit visibility keyword are defined as public. <br>
<br>
<b> Example #2 Method Declaration</b>
<br>
<?php

$code1 = '<?php
/**
 * Define MyClass
 */
class MyClass
{
    // Declare a public constructor
    public function __construct() { }

    // Declare a public method
    public function MyPublic() { }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    // This is public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass;
$myclass->MyPublic(); // Works
$myclass->MyProtected(); // Fatal Error
$myclass->MyPrivate(); // Fatal Error
$myclass->Foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // Fatal Error
    }
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // Works
$myclass2->Foo2(); // Public and Protected work, not Private

class Bar 
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}

class Foo extends Bar 
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }
}

$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate 
                // Foo::testPublic
?>';
highlight_string($code1);


/**
 * Define MyClass
 */
class MyClass3
{
    // Declare a public constructor
    public function __construct() { }

    // Declare a public method
    public function MyPublic() { }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    // This is public
    function Foo()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate();
    }
}

$myclass = new MyClass3;
$myclass->MyPublic(); // Works
// $myclass->MyProtected(); // Fatal Error
// $myclass->MyPrivate(); // Fatal Error
$myclass->Foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class MyClass4 extends MyClass3
{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        // $this->MyPrivate(); // Fatal Error
    }
}

$myclass2 = new MyClass4;
$myclass2->MyPublic(); // Works
$myclass2->Foo2(); // Public and Protected work, not Private

class Bar 
{
    public function test() {
        $this->testPrivate();
        $this->testPublic();
    }

    public function testPublic() {
        echo "<br> Bar::testPublic <br>";
    }
    
    private function testPrivate() {
        echo "<br> Bar::testPrivate <br>";
    }
}

class Foo extends Bar 
{
    public function testPublic() {
        echo "<br> Foo::testPublic <br>";
    }
    
    private function testPrivate() {
        echo "<br> Foo::testPrivate <br>";
    }
}

$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate 
                // Foo::testPublic
?>

</p>

<h2> Constant Visibility </h2>

As of PHP 7.1.0, class constants may be defined as public, private, or protected.  <br>
Constants declared without any explicit visibility keyword are defined as public. <br>
<br>
Example #3 Constant Declaration as of PHP 7.1.0 <br>
<br> <br>

<?php

$code2 = '<?php
/**
 * Define MyClass
 */
class MyClass5
{
    // Declare a public constant
    public const MY_PUBLIC = \'public\';

    // Declare a protected constant
    protected const MY_PROTECTED = \'protected\';

    // Declare a private constant
    private const MY_PRIVATE = \'private\';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MyClass5();
MyClass5::MY_PUBLIC; // Works
// MyClass5::MY_PROTECTED; // Fatal Error
// MyClass5::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class MyClass6 extends MyClass5
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        // echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass6 = new MyClass6;
echo MyClass6::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private

?>';
highlight_string($code2);


/**
 * Define MyClass
 */
class MyClass5
{
    // Declare a public constant
    public const MY_PUBLIC = 'public';

    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC . "<br>";
        echo self::MY_PROTECTED. "<br>";
        echo self::MY_PRIVATE. "<br>";
    }
}

$myclass = new MyClass5();
MyClass5::MY_PUBLIC; // Works
// MyClass5::MY_PROTECTED; // Fatal Error
// MyClass5::MY_PRIVATE; // Fatal Error
$myclass->foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
class MyClass6 extends MyClass5
{
    // This is public
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        // echo self::MY_PRIVATE; // Fatal Error
    }
}

$myclass6 = new MyClass6;
echo MyClass6::MY_PUBLIC; // Works
$myclass2->foo2(); // Public and Protected work, not Private
?>



<p>
<h2> Visibility from other objects </h2>
Objects of the same type will have access to each others private and protected members even though they are not the same instances.  <br>
This is because the implementation specific details are already known when inside those objects. <br>
<br>
<b> Example #4 Accessing private members of the same object type </b> <br>
<br>
</p>

<?php

$code4 = '<?php
class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo \'Accessed the private method.\';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = \'hello\';
        var_dump($other->foo);

        // We can also call the private method:
        $other->bar();
    }
}

$test = new Test(\'test\');

$test->baz(new Test(\'other\'));

?>';
highlight_string($code4);


class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo '<br> Accessed the private method. <br>';
    }

    public function baz(Test $other)
    {
        // We can change the private property:
        $other->foo = 'hello';
        var_dump($other->foo);

        // We can also call the private method:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));
?>

</body>
</html>