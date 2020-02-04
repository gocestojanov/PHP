<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bon Appétit Hacker Ranks Problem</title>
</head>
<body>
<p>
Anna and Brian are sharing a meal at a restuarant and they agree to split the bill equally.  <br>
Brian wants to order something that Anna is allergic to though, and they agree that  <br>
Anna won't pay for that item. Brian gets the check and calculates Anna's portion. <br>
You must determine if his calculation is correct. <br>
<br>
For example, assume the bill has the following prices: <b>bill=[2,4,6]</b>. <br>
Anna declines to eat item <b>k=bill[2]</b>  which costs <b>6</b>. <br>
<br>
If Brian calculates the bill correctly, Anna will pay <b>(2+4)/2=3</b>. <br>
If he includes the cost of <b>k=bill[2]</b> , he will calculate <b>(2+4+6)/2=6</b>. <br>
In the second case, he should refund <b>3</b>  to Anna. <br>
<br>
<h2>Function Description</h2>
<br>
Complete the bonAppetit function in the editor below. It should print Bon Appetit if the bill <br>
 is fairly split. Otherwise, it should print the integer amount of money that Brian owes Anna. <br>
<br>
bonAppetit has the following parameter(s): <br>
<br>
bill: an array of integers representing the cost of each item ordered <br>
k: an integer representing the zero-based index of the item Anna doesn't eat <br>
b: the amount of money that Anna contributed to the bill <br>
<br>
<h2>Input Format</h2>
<br>
The first line contains two space-separated integers <b>n</b> and <b>k</b>,  <br>
the number of items ordered and the 0-based index of the item that Anna did not eat. <br>
<br>
The second line contains <b>n</b>  space-separated integers <b>bill[i]</b>  where <b>0<=i<=n</b> . <br>
<br>
The third line contains an integer, <b>b</b> , the amount of money that Brian charged Anna for her share of the bill. <br>
<br>
<h2>Output Format</h2> 
<br>
If Brian did not overcharge Anna, print <b>Bon Appetit</b> on a new line;  <br>
otherwise, print the difference (i.e., <b>b-charged - b-actual</b> ) that Brian must refund to Anna. This will always be an integer. <br>
<br>
<h2>Sample Input </h2>

4 1 <br>
3 10 2 9 <br>
12 <br>
 <br>
<b>Sample Output </b> 
<br>
5
</p> 

<?php

function bonAppetit($bill, $k, $b) {

    $fullbill = array_sum($bill);
    $fullbill_half = $fullbill/2;

    unset($bill[$k]);

    $fullbill1 = array_sum($bill);
    $fullbill_half1 = $fullbill1/2;
    
    if ($fullbill_half1 == $b) {
        return "Bon Appetit";
    } else {
        return $b - $fullbill_half1;
    }

}
$bill = [3, 10, 2, 9];

echo "<br><br><br>Result bill = [3, 10, 2, 9], k=1, b=12: <b style='font-size: x-large;font-style: italic;color: #a79aec;'>" . bonAppetit($bill, 1, 12) ."</b><br><br><br>";



$code = '<?php
function bonAppetit($bill, $k, $b) {

    $fullbill = array_sum($bill);
    $fullbill_half = $fullbill/2;

    unset($bill[$k]);

    $fullbill1 = array_sum($bill);
    $fullbill_half1 = $fullbill1/2;
    
    if ($fullbill_half1 == $b) {
        echo "Bon Appetit";
    } else {
         echo $b - $fullbill_half1;
    }

}
?>';
highlight_string($code);


?>
</body>
</html>