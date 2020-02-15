<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Generators</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">

<h1 style="color: brown;">Generators</h1>

<h2 style="color: brown;">The Yield Keyword</h2>
Reading a large file with a generator
<p>
A <b>yield</b> statement is similar to a <b>return</b> statement, except that instead of stopping execution of the function and <br>
returning, <b>yield</b> instead returns a <b>Generator object</b> and pauses execution of the generator function. <br>
<br>
    Here is an example of the range function, written as a generator: <br>
</p>

<?php

$code = '<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}
?>';
highlight_string($code);

function oneToThree()
{
    for ($i=1; $i <= 3; $i++) { 
        yield $i;
    }
}

// echo "<br>" .  oneToThree();

$generator = oneToThree();

var_dump($generator);

?>

<p>
<br> The Generator object can then be iterated over like an array. <br>   
In addition to yielding values, you can also yield key/value pairs. <br> 
</p>

<?php
  foreach ( oneToThree()  as $val) 
  {
    echo $val . "<br>";
  }
?>

<h2 style="color: brown;">Reading a large file with a generator</h2>

<p>
One common use case for generators is reading a file from disk and iterating over its contents. Below is a class that <br>
allows you to iterate over a CSV file. The memory usage for this script is very predictable, and will not fluctuate <br>
depending on the size of the CSV file. <br>
</p>

<?php

$code1 = '<?php
class CsvReader
{
    protected $file;
    public function __construct($filePath) 
    {
        $this->file = fopen($filePath, \'r\');
    }

    public function rows()
    {
        while (!feof($this->file)) {
            $row = fgetcsv($this->file, 4096);
            yield $row;
        }
        return;
    }
}

$csv = new CsvReader(\'/path/to/huge/csv/file.csv\');
foreach ($csv->rows() as $row) {
    // Do something with the CSV row.
}
?>';
highlight_string($code1);

class CsvReader  
{
    protected $file;

    public function __construct($filePath)
    {
        try {
            $this->file = fopen($filePath, 'r');
            // var_dump($this->file);
        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

    public function rows()
    {
        while (!feof($this->file)) {
            $row = fgetcsv($this->file,4096);

            yield $row;
        }

        return;
    }

}

try {
    $csv = new CsvReader('Sales_Records.csv');
    // var_dump($csv);    
} catch (\Throwable $th) {
    echo $th;
}

echo "<br>";  

$i = 0;
foreach ( $csv->rows() as $row)
{
    if ($i == 100) { break; }
    echo  $row[0]  . "<br>";
    $i++;
}


?>

<h2 style="color: brown;">Why use a generator?</h2>

<p>
Generators are useful when you need to generate a large collection to later iterate over. They're a simpler <br>
alternative to creating a class that implements an Iterator, which is often overkill. <br>
<br>
For example, consider the below function.
<br>
</p>

<?php

$code2 = '<?php
function randomNumbers(int $length)
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = mt_rand(1, 10);
    }
    
    return $array;
}
?>';
highlight_string($code2);

?>

<p>
All this function does is generates an array that's filled with random numbers. To use it, we might do <br>
randomNumbers(10), which will give us an array of 10 random numbers. What if we want to generate one million <br>
random numbers? randomNumbers(1000000) will do that for us, but at a cost of memory. One million integers <br>
stored in an array uses approximately 33 megabytes of memory. <br>
<br>

<?php

    function formatBytes($size, $precision = 2)
    {
        $base = log($size, 1024);
        $suffixes = array('', 'K', 'M', 'G', 'T');   

        return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    }



    function randomNumbers(int $length)
    {
        $array = [];

        for ($i=0; $i < $length; $i++) { 
            
            $array[] = mt_rand(1,10);
        }

        return $array;

    }

    $startMemory = memory_get_usage();

    $randomNumbers = randomNumbers(1000000);

    echo "<div style='color:brown;'>Memory Result: </div>";
    echo "One million integers stored in an array uses approximately ", formatBytes(memory_get_usage() - $startMemory), 'bytes of memory.' ;
?>
<br><br>
<b> This is due to the entire one million random numbers being generated and returned at once, rather than one at a <br>
time. Generators are an easy way to solve this issue. </b> <br>

</p>
<h2 style="color: brown;">Using the send()-function to pass values to a generator</h2>

<p>
Generators are fast coded and in many cases a slim alternative to heavy iterator-implementations. With the fast <br>
implementation comes a little lack of control when a generator should stop generating or if it should generate <br>
something else. However this can be achieved with the usage of the <b>send() function</b> , enabling the requesting <br>
function to send parameters to the generator after every loop. <br>
</p>

<h3>Example #1 Using Generator::send() to inject values</h3>

<?php
    

    $code3 = '<?php
    function printer() {
        echo "I\'m printer!".PHP_EOL;
        while (true) {
            $string = yield;
            echo $string.PHP_EOL;
        }
    }
    
    $printer = printer();
    $printer->send(\'Hello world!\');
    $printer->send(\'Bye world!\');    
?>';
    highlight_string($code3);


    function printer() {
        echo "I'm printer!<br>".PHP_EOL;
        while (true) {
            $string = yield;
            echo $string.PHP_EOL;
        }
    }
    
    echo "<br>";
    $printer = printer();
    $printer->send('Hello world!<br>');
    $printer->send('Bye world!<br>');    
?>


</body>
</html>