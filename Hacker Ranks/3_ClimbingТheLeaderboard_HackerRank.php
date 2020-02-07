<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Climbing the Leaderboard Hacker Rank Problem</title>
</head>
<body>

<h1>Climbing the Leaderboard</h1>

<p>
Alice is playing an arcade game and wants to climb to the top of the leaderboard and wants to track her ranking. <br> 
The game uses Dense Ranking, so its leaderboard works like this: <br>

<ul>
<li> The player with the highest score is ranked number <b>1</b> on the leaderboard.</li>
<li> Players who have equal scores receive the same ranking number, and the next player(s) receive the immediately following ranking number.</li>
</ul>

For example, the four players on the leaderboard have high scores of <b>100, 90, 90, 80</b>. <br>
Those players will have ranks <b>1, 2, 2, and 3</b>, respectively. <br>

If Alice's scores are <b>70, 80 and 105</b> , her rankings after each game are <b>4th, 3rd and 1st</b>.

<h3>Function Description</h3>

Complete the climbingLeaderboard function in the editor below. It should return an integer array  <br>
where each element <b>res[j]</b>   represents Alice's rank after the <b>j-th</b> game. <br>
<br>
climbingLeaderboard has the following parameter(s): <br>
<br>
<ul>
<li> <b>scores:</b>  an array of integers that represent leaderboard scores</li>
<li> <b>alice:</b>  an array of integers that represent Alice's scores</li>
</ul>

<h3>Input Format</h3>

The next line contains <b>n</b> space-separated integers <b>scores[i]</b> , the leaderboard scores in decreasing order. <br>

The last line contains <b>m</b> space-separated integers <b>alice[j]</b> , the game scores. <br>

<h3>Output Format</h3>

Print <b>m</b> integers. The <b>j-th</b> integer should indicate Alice's rank after playing the <b>j-th</b> game. <br>

<h3>Sample Input</h3>

7 <br>
100 100 50 40 40 20 10 <br>
4 <br>
5 25 50 120 <br>

<h3>Sample Output</h3>

6 <br>
4 <br>
2 <br>
1 <br>

</p>


<?php

$code = '<?php
// Complete the climbingLeaderboard function below.
function climbingLeaderboard($scores, $alice) {

    foreach ($alice as $alicescore) {

        $sliced = [];

        foreach ($scores as $score) {

            $sliced[] = $score;

            if ( $alicescore < $score ) {

                $result = count(array_unique($sliced))+1;

            } elseif ( $alicescore >= $score ) {

                $result = count(array_unique($sliced));

                break;        

            } 

        }

        $result1[] = $result;
    }        

    return $result1;

}

?>';
highlight_string($code);



// Complete the climbingLeaderboard function below.
function climbingLeaderboard($scores, $alice) {

    foreach ($alice as $alicescore) {

        // echo $alicescore . "\n";

        $sliced = [];

        foreach ($scores as $score) {

            $sliced[] = $score;

            if ( $alicescore < $score ) {

                // print_r($sliced);

                $result = count(array_unique($sliced))+1;


            } elseif ( $alicescore == $score ) {

                $result = count(array_unique($sliced));

                break;        

            } elseif ( $alicescore > $score ) {

                $result = count(array_unique($sliced));

                break;        

            }


        }

        $result1[] = $result;
    }        

    return $result1;

}

$scores = [100, 100, 50, 40, 40, 20, 10];
$alice = [5, 25, 50, 120];

echo "<br><h2>Input:</h2>"; 

echo "scores = [100, 100, 50, 40, 40, 20, 10]<br>";
echo "<br>alice = [5, 25, 50, 120]<br>";

echo "<br><div style='color:green; font-size:xx-large'>The result is: <br>";

$r = climbingLeaderboard($scores, $alice);

foreach ($r as $key => $value) {
    echo $value . "<br>";
}


echo "</div>";
?>


</body>
</html>