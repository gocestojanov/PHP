<?php

$grades = [ 73, 67, 38, 33 ];

// Student 1 received a 73, and the next multiple of 5 from 73 is 75. Since 75-73<3 ,The student's grade is rounded to 75.
// Student 2 received a 67, and the next multiple of 5 from 67 is 70. Since 70-67=3, the grade will not be modified and the student's final grade is 67.
// Student 3 received a 38, and the next multiple of 5 from 38 is 40. Since 40-38<3, the student's grade will be rounded to 40.
// Student 4 received a grade below 38, so the grade will not be modified and the student's final grade is 33.


// foreach statement – do not change the internal array pointer: 
// In PHP versions 5.x and before, we were able to modify the internal array pointer 
// while iterating over an array with the foreach statement. However in PHP 7, this feature has been removed completely.

function gradingStudents($grades) {
    
    foreach ($grades as $grade) {
        
        if ( $grade >= 38) { 
            
            $roundgrade = ceil($grade/5) * 5;
            
            if ( $roundgrade-$grade < 3 ) {
                
                $grade = $roundgrade;
                
            } 
        } 
    }

    return $grades;

}

// foreach statement (by-reference) has an improved iteration behaviour: 
// PHP 7 has released an improved version of the foreach statement in terms of its iteration behaviour.

function gradingStudentsByRef($grades) {
    
    // & sign is inserted before $grade
    foreach ($grades as &$grade) {
        
        if ( $grade >= 38) { 
            
            $roundgrade = ceil($grade/5) * 5;
            
            if ( $roundgrade-$grade < 3 ) {
                
                $grade = $roundgrade;
                
            } 
        } 
    }

    return $grades;

}

$resultinggrades = gradingStudents($grades);

echo "In PHP 7 the value is not change in foreach: " . "\n";

foreach ($resultinggrades as $resultinggrade) {
   echo  $resultinggrade . "\n";
}


$resultinggrades = gradingStudentsByRef($grades);


echo "\n\n\nIn PHP 7 foreach iteration by-reference value is changed: " . "\n";

foreach ($resultinggrades as $resultinggrade) {
   echo  $resultinggrade . "\n";
}
