
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Constants PHPDocs</title>
</head>
<body>


<p>
<h2>Example #1 Defining and using a constant</h2>
</p>

<?php


$code1 = '<?php
class MyClass
{
    const CONSTANT = \'constant value\';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n"; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."\n"; // As of PHP 5.3.0
?>';
highlight_string($code1);

class MyClass
{
    const CONSTANT = 'Constant value';

    function showConstant() {
        echo "<br> self::CONSTANT  > " . self::CONSTANT . "<br>";
    }
}
echo "<br>Results:<br>";
echo "<br> MyClass::CONSTANT  > " .  MyClass::CONSTANT . "<br>";

$classname = "MyClass";
echo "<br> \$classname::CONSTANT  > " . $classname::CONSTANT . "<br>"; // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo "<br> \$class::CONSTANT  > " . $class::CONSTANT."\n"; // As of PHP 5.3.0


?>

<p>
<h2>Example #2 Namespaced ::class example</h2>
</p>

<?php
$code2 = '
<?php
namespace foo {
    class bar {
    }

    echo bar::class; // foo\bar
}
?>
';
highlight_string($code2);


?>

<p>
<h2>Example #3 Constant expression example</h2>
</p>

<?php
$code3 = '<?php
const ONE = 1;

class foo {
    // As of PHP 5.6.0
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = \'The value of THREE is \'.self::THREE;
}
?>';
highlight_string($code3);


const ONE = 1;

class foo {
    // As of PHP 5.6.0
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}

echo "<br> ONE: " . ONE . " ; <br>foo::TWO > " . foo::TWO . " ; <br>foo::THREE > " . foo::THREE . " ; <br>foo::SENTENCE > " . foo::SENTENCE . "<br>";

?>


<p>
<h2>Example #4 Class constant visibility modifiers</h2>
</p>

<?php
$code4 = '<?php
class Foo {
    // As of PHP 7.1.0
    public const BAR = \'bar\';
    private const BAZ = \'baz\';
}
echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL;
?>';
highlight_string($code4);

class Foo1 {
    // As of PHP 7.1.0
    public const BAR = 'bar';
    private const BAZ = 'baz';
}
echo "<br>Foo1::BAR >" .  Foo1::BAR;
echo "<br>Foo1::BAZ >" .  Foo1::BAZ;


?>





</body>
</html>