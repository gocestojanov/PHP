<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constructors and Destructors PHPDOcs</title>
</head>
<body>
<h2>Constructor</h2>

__construct ([ mixed $args = "" [, $... ]] ) : void <br>
<br>
PHP 5 allows developers to declare constructor methods for classes.  <br>
Classes which have a constructor method call this method on each newly-created <br>
object, so it is suitable for any initialization that the object may need before it is used. <br>
<br>
<b>Note:</b> Parent constructors are not called implicitly if the child class defines a constructor.  <br>
In order to run a parent constructor, a call to <b>parent::__construct()</b>  within the child  <br>
constructor is required. If the child does not define a constructor then it may be inherited from <br> 
the parent class just like a normal class method (if it was not declared as private). <br>
<br>
<h3>Example #1 using new unified constructors</h3>
<?php
$code = '<?php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass\'s constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();
?>';
highlight_string($code);  

class BaseClass {
    function __construct() {
        print "<br><div style='color:darkcyan;font-size: xx-large;'> In BaseClass constructor </div><br>";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "<div style='color:darkcyan;font-size: xx-large;'> In SubClass constructor </div><br>";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();

?>

<p>
    Unlike with other methods, PHP will not generate an <b>E_STRICT</b>  level error message when __construct() is overridden <br>
    with different parameters than the parent __construct() method has. <br>
</p>

<h2>Destructor</h2>

__destruct ( void ) : void <br>
<br>
PHP 5 introduces a destructor concept similar to that of other object-oriented languages, such as C++. <br>
The destructor method will be called as soon as there are no other references to a particular object,  <br>
or in any order during the shutdown sequence. <br>
<br>

<h3>Example #2 Destructor Example</h3>

<?php
$code = '<?php
class MyDestructableClass 
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();
?>';
highlight_string($code);    

class MyDestructableClass 
{
    function __construct() {        
        print "<br> <div style='color:darkcyan;font-size: xx-large;'> In constructor </div> <br>";
    }

    function __destruct() {
        print "<br> <div style='color:coral;font-size: xx-large;'> Destroying " . __CLASS__ . "</div><br>";
    }
}

$obj = new MyDestructableClass();

?>

<p>
    Like constructors, parent destructors will not be called implicitly by the engine. <br>
    In order to run a parent destructor, one would have to explicitly call <b>parent::__destruct()</b>   <br> 
    in the destructor body. Also like constructors, a child class may inherit the parent's destructor  <br>
    if it does not implement one itself. <br>
<br>
    The destructor will be called even if script execution is stopped using exit(). Calling exit() in  <br>
    a destructor will prevent the remaining shutdown routines from executing. <br>
</p>

</body>
</html>