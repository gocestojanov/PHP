<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Migratory Birds</title>
</head>
<body>
<p>
You have been asked to help study the population of birds migrating across the continent. <br>
Each type of bird you are interested in will be identified by an integer value. <br>
Each time a particular kind of bird is spotted, its id number will be added to your array of sightings. <br>
You would like to be able to find out which type of bird is most common given a list of sightings. <br>
Your task is to print the type number of that bird and if two or more <br>
types of birds are equally common, choose the type with the smallest ID number. <br>
<br>
<br>
For example, assume your bird sightings are of types <b>array=[1,1,2,2,3]</b>. <br> 
There are two each of types <b>1</b>  and <b>2</b> , and one sighting of type <b>3</b> . <br>
Pick the lower of the two types seen twice: type <b>1</b>. <br>
<br>
<h2>Function Description</h2>
<br>
Complete the migratoryBirds function in the editor below. It should return the lowest type number of the most frequently sighted bird. <br>
<br>
migratoryBirds has the following parameter(s):
arr: an array of integers representing types of birds sighted <br>
<br>
<h2>Input Format</h2>
<br>
The first line contains an integer denoting <b>n</b>, the number of birds sighted and reported in the array <b>arr</b>. <br> 
The second line describes <b>arr</b> as <b>n</b> space-separated integers representing the type numbers of each bird sighted. <br>

<h3>Sample Input</h3> 
6 <br>
1 4 4 4 5 3 <br>
<br>
<h3>Sample Output</h3> 
4 <br>
<br>
<h3>Explanation</h3> 
The different types of birds occur in the following frequencies: <br>
<br>
Type 1:1  bird <br>
Type 2:0  birds <br>
Type 3:1  bird <br>
Type 4:3  birds <br>
Type 5:1  bird <br>
The type number that occurs at the highest frequency is type <b>4</b>, so we print <b>4</b> as our answer.

</p>


<?php


// Complete the migratoryBirds function below.
function migratoryBirds($arr) {

    
    if (sort($arr)) {
        $i = 0;
        foreach ( $arr as $key => $value) {
            // echo $value . "\n";
            if ($value == $previous) {
                $i += 1;
                                     
            } else {
                $count_arr[$previous] = $i + 1;
                $i = 0;
            }
            // print_r($count_arr);
            $previous = $value;
        }
    }

    $maxvalue = max($count_arr);

    $key = array_search($maxvalue, $count_arr);

    return $key;

}

echo "<h3>Input array=[1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4]:</h3><br>";
$arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
echo "Result: <b>" . migratoryBirds($arr) . "</b><br>";

$code = '<?php
function migratoryBirds($arr) {
   
    if (sort($arr)) {
        $i = 0;
        foreach ( $arr as $key => $value) {
 
            if ($value == $previous) {
                $i += 1;
                                     
            } else {
                $count_arr[$previous] = $i + 1;
                $i = 0;
            }
 
            $previous = $value;
        }
    }

    $maxvalue = max($count_arr);

    $key = array_search($maxvalue, $count_arr);

    return $key;

}
?>';

highlight_string($code);





?>

</body>
</html>