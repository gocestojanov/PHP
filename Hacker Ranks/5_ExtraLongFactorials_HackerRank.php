<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">        

    <title>Extra Long Factorials - Hacker Rank Problem</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color: brown;">Extra Long Factorials - BC Math functions</h1>

The factorial of the integer <b>n</b> , written <b>n!</b> , is defined as: <br>

<b>n! = n x (n-1) x (n-2) x ... x 3 x 2 x 1</b> <br>
<br>
Calculate and print the factorial of a given integer. <br>

For example, if <b>n=30</b> , we calculate <b>30 x 29 x ... x 2 x 1</b> and get  265252859812191058636308480000000.

<h3 style="color: brown;">Function Description</h3> 

Complete the <b>extraLongFactorials</b>  function in the editor below. It should print the result and return. <br>
<br>
extraLongFactorials has the following parameter(s):  <br>
<br>
n: an integer <br>
<br>

<b>Note:</b> Factorials of <b>n > 20</b> can't be stored even in a <b>64bit</b>  long long variable. Big integers must be used for such calculations.  <br>
Languages like Java, Python, Ruby etc. can handle big integers, but we need to write additional code in C/C++ to handle huge values. <br>
<br>
We recommend solving this challenge using BigIntegers. <br>

<h4>Input Format</h4> 

Input consists of a single integer n 

<h4>Constraints</h4>  

<b>1 <= n <= 100</b>

<h4>Output Format</h4> 

Print the factorial of n. <br>
<br>
<?php
  
$code = '<?php
// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {

    $result = $n;

    for ( $i=$n-1; $i>=1; $i--) 
    {
        // $result *= $i;
        $result = bcmul($result, $i);
    }

    echo $result;

}
?>';
highlight_string($code);

// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {

    $result = $n;

    for ( $i=$n-1; $i>=1; $i--) 
    {
        // $result *= $i;
        $result = bcmul($result, $i);
        // echo $result . "; $i, \n";
    }

    echo $result;

}

echo "<br> <b>Input=30; Result: </b> <br>"; 
extraLongFactorials(30);

?>

</body>
</html>