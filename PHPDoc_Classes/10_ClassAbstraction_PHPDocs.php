<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>10 . Class Abstraction - PHP Docs</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color: brown;">Class Abstraction</h1>

PHP 5 introduces abstract classes and methods. Classes defined as abstract cannot be instantiated,  <br> 
and any class that contains at least one abstract method must also be abstract. Methods defined as  <br>
abstract simply declare the method's signature - they cannot define the implementation.  <br>
<br>

When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must <br>
be defined by the child; additionally, these methods must be defined with the same (or a less restricted) visibility.  <br>
For example, if the abstract method is defined as protected, the function implementation must be defined as either  <br>
protected or public, but not private. Furthermore the signatures of the methods must match, i.e. the type hints  <br>
and the number of required arguments must be the same. For example, if the child class defines an optional argument,  <br>
where the abstract method's signature does not, there is no conflict in the signature. This also applies to  <br>
constructors as of PHP 5.4. Before 5.4 constructor signatures could differ. <br>
<br>

<h3>Example #1 Abstract class example</h3>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$code = '<?php
    abstract class AbstractClass  
    {
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);

        public function printOut()
        {
            echo $this->getValue();
        }

    }

    class ConcreteClass1 extends AbstractClass 
    {
        protected function getValue()
        {
            return "ConcreteClass1";
        }

        public function prefixValue($prefix)
        {
            return "{$prefix}ConcreteClass1";
        }
    }

    class ConcreteClass2 extends AbstractClass 
    {
        public function getValue()
        {
            return "ConcreteClass2";
        }

        public function prefixValue($prefix)
        {
            return "{$prefix}ConcreteClass2";
        }
    }
    $class1 = new ConcreteClass1();
    $class1->printOut();
    echo $class1->prefixValue(\'Foo_\');

    $class2 = new ConcreteClass2();
    $class2->printOut();
    echo $class2->prefixValue(\'Bar_\');
?>';
highlight_string($code);

abstract class AbstractClass  
{
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut()
    {
        echo $this->getValue();
    }

}

class ConcreteClass1 extends AbstractClass 
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass 
{
    public function getValue()
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }
}

echo "<br><br><b style='color:brown'> Result: </b> <br>";

$class1 = new ConcreteClass1();
$class1->printOut();
echo "<br>";
echo $class1->prefixValue('Foo_');
echo "<br>";


$class2 = new ConcreteClass2();
$class2->printOut();
echo "<br>";
echo $class2->prefixValue('Foo_');
echo "<br>";


?>

<h3>Example #2 Abstract class example</h3>

<?php

$code1 = '<?php
    abstract class AbstractClass {

        abstract protected function prefixName($name);

    }

    class ConcreteClass extends AbstractClass 
    {
        public function prefixName($name, $separator = ".") 
        {
            if ($name == "Pacman") {
                $prefix = "Mr";
            } elseif ($name == "Pacwoman") {
                $prefix = "Mrs";
            } else {
                $prefix = "Other";
            }

            return "{$prefix}{$separator}{$name}";
        }
    }

    $class = new ConcreteClass;
    echo $class->prefixName("ConcreteClass","/");
    echo $class->prefixName("Pacman");
    echo $class->prefixName("Pacwoman");

?>';
highlight_string($code1);

abstract class AbstractClass1 {

    abstract protected function prefixName($name);

}

class ConcreteClass3 extends AbstractClass1 
{
    public function prefixName($name, $separator = ".") 
    {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "Other";
        }

        return "{$prefix}{$separator}{$name}";
    }
}

echo "<br><br><b style='color:brown'> Result: </b> <br>";


$class3 = new ConcreteClass3();
echo $class3->prefixName("ConcreteClass3","/");
echo "<br>";
echo $class3->prefixName("Pacman");
echo "<br>";
echo $class3->prefixName("Pacwoman");
?>

</body>
</html>