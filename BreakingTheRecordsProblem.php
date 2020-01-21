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

echo  "<br>" . "Breaking the Records Problem: " . "<br>";  
echo  "<br>" . "Function Description <br>
Complete the breakingRecords function in the editor below. <br>
It must return an integer array containing the numbers of times she broke her records. <br>
Index 0 is for breaking most points records, and index 1 is for breaking least points records.<br>
breakingRecords has the following parameter(s):<br>
scores: an array of integers <br>
<br><br>
Input Format<br>
<br>
The first line contains an integer n, the number of games.<br>
The second line contains n space-separated integers describing the respective values of <br>
score0, score1, score2, score3 ...<br><br>
Sample Input 0<br>
9<br>
10 5 20 20 4 5 2 25 1<br>
Sample Output 0<br>
2 4<br>
<br>
Sample Input 1<br>
10<br>
3 4 21 36 10 28 35 5 24 42<br>
Sample Output 1<br>
4 0<br>
" . "<br>";

// Complete the breakingRecords function below.
function breakingRecords($scores) {

    $maxcount = 0;
    $mincount = 0;

    for ( $i=1; $i<count($scores); $i++) {

        $current = $scores[$i];

        $current_array = array_slice($scores, 0, $i);        
        $maxelement = max($current_array);
        $minelement = min($current_array);


        $max = 0;
        $min = 0;

        if ( $current > $maxelement ) {
            $max =  1;
            $min =  0;
        } elseif ( $current == $maxelement  ) {            
            $min =   0;
            $max =   0;
        } elseif  ( $current < $minelement ) {            
            $min =   1;
            $max =   0;            
        }            
        
        if ($max == 1) {
            $maxcount += 1;
        }
        if ($min == 1) {
            $mincount += 1;
        }         
    }

    $result = [$maxcount,$mincount];
    return $result;

}


echo  "<br>" . "Input array [3 4 21 36 10 28 35 5 24 42]: " . "<br>";  

$scores = [3, 4, 21, 36, 10, 28, 35, 5, 24, 42];
$result = breakingRecords($scores);

echo "Result is: " .  $result[0] . " " . $result[1] . "<br><br><br>";  


$code = '<?php
function breakingRecords($scores) {

    $maxcount = 0;
    $mincount = 0;

    for ( $i=1; $i<count($scores); $i++) {

        $current = $scores[$i];

        $current_array = array_slice($scores, 0, $i);        
        $maxelement = max($current_array);
        $minelement = min($current_array);


        $max = 0;
        $min = 0;

        if ( $current > $maxelement ) {
            $max =  1;
            $min =  0;
        } elseif ( $current == $maxelement  ) {            
            $min =   0;
            $max =   0;
        } elseif  ( $current < $minelement ) {            
            $min =   1;
            $max =   0;            
        }            
        
        if ($max == 1) {
            $maxcount += 1;
        }
        if ($min == 1) {
            $mincount += 1;
        }         
    }

    $result = [$maxcount,$mincount];
    return $result;

}';

highlight_string($code);

?>
</body>
</html>
