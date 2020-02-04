<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birthday Chocolate Hacker Rank Problem</title>
</head>
<body>
<h1> Birthday Chocolate Hacker Rank Problem </h1>
<p>Lily has a chocolate bar that she wants to share it with Ron for his birthday. <br>
Each of the squares has an integer on it. She decides to share a contiguous segment <br>
of the bar selected such that the length of the segment matches Ron's birth month <br>
and the sum of the integers on the squares is equal to his birth day. <br>
You must determine how many ways she can divide the chocolate. <br><br>

Consider the chocolate bar as an array of squares, s=[2,2,1,3,2]. <br>
She wants to find segments summing to Ron's birth day d=4,  <br>
with a length equalling his birth month, m=2. <br>
In this case, there are two segments meeting her criteria: [2,2] and [1,3]. <br><br>

<h2>Function Description</h2> <br>  

Complete the birthday function in the editor below. It should return an integer denoting the number of ways Lily can divide the chocolate bar. <br><br>

birthday has the following parameter(s): <br><br>

s: an array of integers, the numbers on each of the squares of chocolate <br>  
d: an integer, Ron's birth day <br>
m: an integer, Ron's birth month <br> <br>

<h3>Output Format</h3> 

Print an integer denoting the total number of ways that Lily can portion her chocolate bar to share with Ron. <br> <br>

Sample Input  <br> 
5 <br>
1 2 1 3 2 <br>
3 2 <br> <br>
Sample Output  <br>
2 <br> <br>
Explanation  <br> 

Lily wants to give Ron  squares summing to . The following two segments meet the criteria: <br>
</p>

<h1>Examples:</h1>


<?php


function birthday($s, $d, $m) {

    $result = 0;
    for ($i=0; $i<count($s); $i++) {
            
        // $plus1 = $s[$i] + $s[$i+1];
        // $plus2 = $s[$i] + $s[$i+1] + $s[$i+2];
        // $plus3 = $s[$i] + $s[$i+1] + $s[$i+2] + $s[$i+3];

        $sum = 0;
        for ($j=0; $j<=$m-1; $j++) {
            $sum = $sum +  $s[$i + $j];  
        }            


        if ($sum == $d) {
            $result = $result + 1;
        } 
    }

    return $result;
}

echo "Example 1: <br>
5 <br>
1 2 1 3 2 <br>
3 2 <br>";

$s = [1,2,1,3,2];
echo "Result 1: " . birthday($s,3,2) . "<br><br>";


echo "Example 2: <br>
6 <br>
1 1 1 1 1 1 <br>
3 2 <br>";

$s = [1,1,1,1,1,1];
echo "Result 2: " . birthday($s,3,2) . "<br><br>";


echo "Example 3: <br>
1 <br>
4 <br>
4 1 <br>";

$s = [4];
echo "Result 3: " . birthday($s,4,1) . "<br><br>";


echo "Example 4: <br>
6 <br>
1 1 1 1 1 1 <br>
3 3 <br>";

$s = [1,1,1,1,1,1];
echo "Result 4: " . birthday($s,3,3) . "<br><br>";


$output = '<?php


function birthday($s, $d, $m) {

    $result = 0;
    for ($i=0; $i<count($s); $i++) {
            
        // $plus1 = $s[$i] + $s[$i+1];
        // $plus2 = $s[$i] + $s[$i+1] + $s[$i+2];
        // $plus3 = $s[$i] + $s[$i+1] + $s[$i+2] + $s[$i+3];

        $sum = 0;
        for ($j=0; $j<=$m-1; $j++) {
            $sum = $sum +  $s[$i + $j];  
        }            


        if ($sum == $d) {
            $result = $result + 1;
        } 
    }

    return $result;
}';

highlight_string($output);


?>
</body>
</html>