<?php

$grades = [ 4, 73, 67, 38, 33 ];



echo "Input array: " . "\n";

foreach ($grades as $grade) {
    echo  $grade . "\n";
}
// Student 1 received a 73, and the next multiple of 5 from 73 is 75. Since 75-73<3 ,The student's grade is rounded to 75.
// Student 2 received a 67, and the next multiple of 5 from 67 is 70. Since 70-67=3, the grade will not be modified and the student's final grade is 67.
// Student 3 received a 38, and the next multiple of 5 from 38 is 40. Since 40-38<3, the student's grade will be rounded to 40.
// Student 4 received a grade below 38, so the grade will not be modified and the student's final grade is 33.


function gradingStudents($grades) {
    
    foreach ($grades as $grade) {
        
        if ( $grade >= 38) { 
            
            $roundgrade = ceil($grade/5) * 5;
            
            if ( $roundgrade-$grade < 3 ) {
                
                $grade = $roundgrade;
                
            } 
        } else {


            // Removing by value
            if (($key = array_search($grade, $grades)) !== false) {
                unset($grades[$key]);
            }
        }
    
    } 
    return $grades;

}


$resultinggrades = gradingStudents($grades);

echo "\nRemoving elements >= 38 by Value: " . "\n";

foreach ($resultinggrades as $resultinggrade) {
   echo  $resultinggrade . "\n";
}