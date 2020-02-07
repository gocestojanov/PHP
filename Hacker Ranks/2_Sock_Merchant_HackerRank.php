<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sock Merchant Hacker Ranks Problem</title>
</head>
<body>
<h1>Sock Merchant Hacker Ranks Problem</h1>    
<p>
John works at a clothing store. He has a large pile of socks that he must pair by color for sale. <br>
Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are. <br>
<br>
For example, there are <b>n=7</b> socks with colors <b>ar=[1,2,1,2,1,3,2]</b>. There is one pair of color <b>1</b> and one of color <b>2</b>.  <br>
There are three odd socks left, one of each color. The number of pairs is <b>2</b>. <br>
<br>

<h3>Function Description</h3>

Complete the sockMerchant function in the editor below. It must return an integer representing the number of matching pairs of socks that are available. <br>
<br>
sockMerchant has the following parameter(s): <br>

<ul>
<li> n: the number of socks in the pile</li>
<li> ar: the colors of each sock</li>
</ul>

<h3> Input Format</h3>

The first line contains an integer <b>n</b>, the number of socks represented in <b>ar</b>. <br>
The second line contains <b>n</b> space-separated integers describing the colors <b>ar[i]</b> of the socks in the pile. <br>

<h3>Output Format</h3>

Return the total number of matching pairs of socks that John can sell. <br>
<br>
<h3>Sample Input</h3>

9 <br>
10 20 20 10 10 30 50 10 20 <br>
<br>

<h3>Sample Output</h3>

3 <br>

<h3>Explanation</h3>
<img src="1474122392-c7b9097430-sock.png" alt="sock example">

</p>


<h3>Solution</h3>

<?php
 
 
$code = '<?php
function sockMerchant($n, $ar) {

    $ar = array_count_values($ar);

    $i = 0;
    foreach ($ar as $value) {

        $i = $i + floor($value/2);

    }

    return $i;

}
?>';
highlight_string($code);



  function sockMerchant($n, $ar) {

    $ar = array_count_values($ar);

    $i = 0;
    foreach ($ar as $value) {

        $i = $i + floor($value/2);

    }

    return $i;

}

$ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$n = 9;

echo "<br>Input:<br>";

echo "<br>ar = [10, 20, 20, 10, 10, 30, 50, 10, 20]<br>";

echo "<br>The result is: " . sockMerchant($n, $ar) . "<br>";


?>



</body>
</html>