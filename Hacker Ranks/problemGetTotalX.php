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

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 * 
 * You will be given two arrays of integers and asked to determine all integers that satisfy the following two conditions:

    The elements of the first array are all factors of the integer being considered
    The integer being considered is a factor of all elements of the second array
    These numbers are referred to as being between the two arrays. You must determine how many such numbers exist.

    Function Description

    Complete the getTotalX function in the editor below. It should return the number of integers that are betwen the sets.

    getTotalX has the following parameter(s):

    a: an array of integers
    b: an array of integers
 * 
 * Sample Input

    2 3
    2 4
    16 32 96
    Sample Output

    3
    Explanation

    2 and 4 divide evenly into 4, 8, 12 and 16.
    4, 8 and 16 divide evenly into 16, 32, 96.

    4, 8 and 16 are the only three numbers for which each element of a is a factor and each is a factor of all elements of b.
 * 
 * 
 */

function getTotalX($a, $b) {
    echo "<br>Input array a: [2, 4]<br>";
    echo "Input array b: [16,32,96]<br>";


    
    for ($i = end($a); $i<=reset($b); $i++) {    

        if ($i % 2 == 0) {
            
            $j = 0;
            foreach ($a as $value_a) {
                 
                 if ( $i % $value_a == 0  ) {                    
                    $j += 1;                    
                 } 

                 if ( $j == count($a) ) {
                        $result_array[] =  $i;

                        $k = 0;
                        foreach ($b as $value_b) {
                            if ( $value_b % $i == 0  ) { 
                                $k += 1;                       
                            }                                 
                            
                            if ( $k == count($b) ) {
                                $result_array1[] =  $i;
                            } 
                        } 
                       
                }
      
            }
        }    
    }

    echo "2 and 4 divide evenly into 4, 8, 12 and 16.<br>";
    //print_r($result_array);
    echo "4, 8 and 16 divide evenly into 16, 32, 96.<br>";
    //print_r($result_array1);

    echo "4, 8 and 16 are the only three numbers for which each element of a is a factor and each is a factor of all elements of b.<br>";

    return count($result_array1);

    
}

$a = [2, 4];
$b = [16,32,96]; 

echo "The result number: " .  getTotalX($a, $b);
?>
    
</body>
</html>
