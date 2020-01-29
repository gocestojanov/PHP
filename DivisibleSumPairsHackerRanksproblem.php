<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisible Sum Pairs</title>
</head>
<body>
<p>
You are given an array of n integers, and a positive integer <br>
Find and print the number of (i,j) pairs where i<\j  and array[i] + array[j] is divisible by k. <br>
For example array[1,2,3,4,5,6], and k=5. Our three pairs meeting the criteria are [1,4],[2,3] and [4,6]. <br>
<br>
Sample Input <br>
<br>
6 3 <br>
1 3 2 6 1 2 <br>
Sample Output <br>
<br>
5 <br>
Explanation <br>
<br>
Here are the 5 valid pairs when k=3: <br>
(0,2) -> array[0] + array[2] = 1 + 2 = 3 <br>
(0,5) -> array[0] + array[5] = 1 + 2 = 3 <br>
(1,3) -> array[1] + array[3] = 3 + 6 = 9 <br>
(2,4) -> array[2] + array[4] = 2 + 1 = 3 <br>
(4,5) -> array[4] + array[5] = 1 + 2 = 3 <br>
</p>    

<?php

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {

    $result = 0;

    for ($i = 0; $i <= count($ar)-1; $i++) {

        for ($j = $i + 1; $j <= count($ar)-1; $j++) {

            $sum = $ar[$i] + $ar[$j];
            //echo "ar[$i]: " . $ar[$i] . "; ar[$j]: " .  $ar[$j] . "; sum" . $sum . "\n";
            if ( $sum % $k == 0 ) {
                $result += 1;    

            }
        }    

    }

    return $result;

}

echo "Input array is: ar = [1, 3, 2, 6, 1, 2], n=6"; 
$ar = [1, 3, 2, 6, 1, 2];
$result = divisibleSumPairs(6,3,$ar);
echo " The result is: $result";

echo "<h1>Here is the solution: </h1>";

$code = '<?php 
function divisibleSumPairs($n, $k, $ar) {

    $result = 0;

    for ($i = 0; $i <= count($ar)-1; $i++) {

        for ($j = $i + 1; $j <= count($ar)-1; $j++) {

            $sum = $ar[$i] + $ar[$j];
 
            if ( $sum % $k == 0 ) {
                $result += 1;    

            }
        }    

    }

    return $result;

}
?>';

highlight_string($code);

?>
</body>
</html>



