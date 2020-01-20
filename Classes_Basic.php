<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Simple Class definition

class SimpleClass 
{
    public $varname =  'default value';

    public function displayVar()
    {
        echo $this->varname;
    }
    
}

// omitting the parentheses
$instance = new SimpleClass;

// var_dump($instance);

// class name in variable
$className = 'SimpleClass';

$instance2 = new $className();

// Object assigning

$assigned = $instance;
$reference = & $instance;

$instance->varname = 'assigned will have this value';

$instance = null;

$code = '<?php 
class SimpleClass 
{
    public $varname =  \'default value\';

    public function displayVar()
    {
        echo $this->varname;
    }
    
}
// omitting the parentheses
$instance = new SimpleClass;
$assigned = $instance;
$reference = & $instance;

$instance->varname = \'assigned will have this value\';

$instance = null;

var_dump($instance);
';
highlight_string($code);
var_dump($instance);
$code1 = '<?php 
var_dump($reference);
';
highlight_string($code1);
var_dump($reference);
$code2 = '<?php 
var_dump($assigned);
';
highlight_string($code2);
var_dump($assigned);


class A 
{

    public static function foo()
    {
        if (isset($a)) {
            echo "this is defined (" . get_class($b) . ")\n";
        } else {
            echo "\n this is not defined.\n";
        }
    }
}

class B  
{
    static function bar()
    {
        A::foo();
    }
}

/*
 $a = new A();
 $a->foo();

 A::foo();

 $b = new B();
 $b->bar();

 B::bar();
*/


class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo '<br>' . $obj->bar . '<br>', PHP_EOL, $obj->bar(), PHP_EOL;

class Foo
{
    public $bar;
    
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo();

// as of PHP 5.3.0:
$func = $obj->bar;
echo $func(), PHP_EOL;

// alternatively, as of PHP 7.0.0:
echo ($obj->bar)(), PHP_EOL;

?>