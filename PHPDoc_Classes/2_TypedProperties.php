<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


class User
{
    public $id;
    public $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}





$version = phpversion();
echo "<h1> PHP Version:" . $version . '</h1><br>';
echo "With PHP_VERSION constant " . PHP_VERSION . "<br><br>";
echo "By default, version_compare() returns -1 if the first version is lower than the second, 0 if they are equal, and 1 if the second is lower. <br><br>";




if (version_compare(PHP_VERSION, '7.4') >= 0) {
    echo 'I am at least PHP version 7.3.4, my version: ' . PHP_VERSION . "<br>";
    $code = '<?php
    class User
    {
        public $id;
        public $name;

        //public int $id;
        //public string $name;        
    
        public function __construct(int $id, string $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
    }
    
    $user = new User(1234, "php");
    
    ?>';

} else {
    echo "You have version lower than 7.4! You can not use Typed Properties!<br>";

    $code = '<?php
    class User
    {
        public $id;
        public $name;

        //public int $id;
        //public string $name;        
    
        public function __construct(int $id, string $name)
        {
            $this->id = $id;
            $this->name = $name;
        }
    }
    
    $user = new User(1234, "php");
    
    ?>';
    
}


highlight_string($code);


$user = new User(1234, "php");
echo "<br><br>Output: ";
echo "<br><br>id: " . $user->id;
echo "<br>";
echo "name: " . $user->name;


?> 
</body>
</html>
