<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day of the Programmer Hacker Ranks Problem</title>
</head>
<body>
<p>
Marie invented a Time Machine and wants to test it by time-traveling to visit Russia <br>
on the Day of the Programmer (the <b>256th</b>  day of the year) during a year in the inclusive <br>
range from <b>1700 to 2700</b>. <br>
<br>
From <b>1700</b> to <b>1917</b> , Russia's official calendar was the Julian calendar; since <b>1919</b>  they used the Gregorian calendar system. <br>
<br>
The transition from the Julian to Gregorian calendar system occurred in <b>1918</b> , <br>
when the next day after January <b>31th</b>  was February <b>14th</b> . <br>
<br>
This means that in <b>1918</b> , February 14th was the <b>32nd</b>  day of the year in Russia. <br>
<br>
In both calendar systems, February is the only month with a variable amount of days; <br>
it has <b>29</b> days during a leap year, and <b>28</b> days during all other years. <br> 
In the Julian calendar, leap years are divisible by <b>4</b>; in the Gregorian calendar, <br>
leap years are either of the following: <br>
Divisible by <b>400</b>.
Divisible by <b>4</b> and not divisible by <b>100</b>. <br>
<br>
Given a year, <b>y</b>, find the date of the <b>256th</b> day of that year according  <br>
to the official Russian calendar during that year. Then print it in the format dd.mm.yyyy, <br> 
where dd is the two-digit day, mm is the two-digit month, and yyyy is <b>y</b> . <br>
<h2>Function Description</h2>
Complete the dayOfProgrammer function in the editor below. It should return a string representing the date of the <b>256th</b> day of the year given. <br>
dayOfProgrammer has the following parameter(s): year: an integer <br>
<br>
<h2>Input Format</h2>
A single integer denoting year <b>y</b>. <br>
<br>
<h2>Constraints</h2>
<b>1700 <= y <= 2700</b> <br>
<br>
<h2>Output Format</h2>
Print the full date of Day of the Programmer during year <b>y</b> in the format dd.mm.yyyy, <br>
where dd is the two-digit day, mm is the two-digit month, and yyyy is . <br>
<br>
<h2>Sample Input</h2> 
2017 <br>
<h2>Sample Output</h2> 
13.09.2017 <br>
<h2>Explanation </h2>
In the year <b>y=2017</b>, <br>
January has <b>31</b> days, <br>
February has <b>28</b> days, <br>
March has <b>31</b> days, <br>
April has <b>30</b> days, <br>
May has <b>31</b> days, <br>
June has <b>30</b> days, <br>
July has <b>31</b> days, and <br>
August has <b>31</b> days. <br>
When we sum the total number of days in the first eight months, we get <br>
<b>31+28+31+30+31+30+31+31=243</b> . <br>
Day of the Programmer is the <b>256th</b> day, <br>
so then calculate <b>256-243=13</b> to determine that it falls on day <b>13</b> of the <b>9th</b> month (September). <br>
We then print the full date in the specified format, which is 13.09.2017. <br>
</p>    





<?php

function dayOfProgrammer($year) {

    if ( 1700 <= $year and $year <= 1917 ) {

        $Januar = 31; 
        if ($year % 4 == 0) {
            $February = 29;
        } else {
            $February = 28;
        }        
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31; 

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        echo $sumdays;       

        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    } elseif ( 1919 <= $year and $year <= 2700 ) {
        
        $Januar = 31; 
        if ( ($year % 400 == 0) or ( ($year % 4) == 0  and ($year % 100) != 0 ) ) {
            $February = 29;
        } else {
            $February = 28;
        }        
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31;

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        echo $February;
        
        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    } elseif ( $yaer = 1918 )  {

        $Januar = 32; 
        $February = 14;
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31;

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        
        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    }    

    return $result;

}


echo "<br>For 2016: day of the programmer is: " . dayOfProgrammer(2016) . "<br>";
echo "<br>For 1700: day of the programmer is: " . dayOfProgrammer(1700) . "<br>";
echo "<br>For 1918: day of the programmer is: " . dayOfProgrammer(1918) . "<br>";
echo "<br>For 1917: day of the programmer is: " . dayOfProgrammer(1917) . "<br>";
echo "<br>For 2020: day of the programmer is: " . dayOfProgrammer(2020) . "<br>";


$code = '<?php
function dayOfProgrammer($year) {

    if ( 1700 <= $year and $year <= 1917 ) {

        $Januar = 31; 
        if ($year % 4 == 0) {
            $February = 29;
        } else {
            $February = 28;
        }        
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31; 

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        echo $sumdays;       

        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    } elseif ( 1919 <= $year and $year <= 2700 ) {
        
        $Januar = 31; 
        if ( ($year % 400 == 0) or ( ($year % 4) == 0  and ($year % 100) != 0 ) ) {
            $February = 29;
        } else {
            $February = 28;
        }        
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31;

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        echo $February;
        
        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    } elseif ( $yaer = 1918 )  {

        $Januar = 32; 
        $February = 14;
        $March = 31;
        $April = 30;
        $May = 31;
        $June = 30; 
        $July = 31;
        $August = 31;

        $ProgrammersDay = 256;
        $sumdays = $Januar + $February + $March + $April
        + $May + $June + $July + $August; 

        $day = $ProgrammersDay - $sumdays;
        
        if ( $ProgrammersDay - $sumdays > 0 ) {
            $month = "09";
            $result = $day . "." . $month . "." . "$year";
        } elseif ( $ProgrammersDay - $sumdays < 0 ) {
            $month = "08";
            $day = 31 - $day;
            $result = $day . "." . $month . "." . "$year";
        } else {
            $result = "01.09." . "$year";
        }


    }    

    return $result;

}?>';

highlight_string($code);




?>

</body>
</html>