<?php

// You are choreographing a circus show with various animals. For one act, you are given 
// two kangaroos on a number line ready to jump in the positive direction (i.e, toward positive infinity).
// The first kangaroo starts at location x1 and moves at a rate of v1 meters per jump.
// The second kangaroo starts at location x2 and moves at a rate of v2 meters per jump.
// You have to figure out a way to get both kangaroos at the same location at 
// the same time as part of the show. If it is possible, return YES, otherwise return NO.

function kangaroo($x1, $v1, $x2, $v2) {


    if ($x2 > $x1 and $v2 > $v1) {
        return 'NO';
    } else {
        $first1 = $x1 + $v1;
        $first2 = $x2 + $v2;
        if ($first1 == $first2) {           
                return 'YES';
        } 
     
        for ($i=1;$i<10000;$i++) {


            // Variable into Variable Name
            // Creating new variables with dynamic names: jump1_1 , jump1_2, jump2_1, jump2_2 ....
            ${"jump" . $i . "_1"} = $first1 + $i*$v1;
            ${"jump" . $i . "_2"} = $first2 + $i*$v2;
            

            // get_defined_vars - function returns all variable names
            print_r(get_defined_vars());

            if (${"jump" . $i . "_1"} == ${"jump" . $i . "_2"}) {           
                return 'YES';
            } 

        }

        return 'NO';
    }
}

echo kangaroo(0, 3, 4, 2);

/* Array
(
    [x1] => 0
    [v1] => 3
    [x2] => 4
    [v2] => 2
    [first1] => 3
    [first2] => 6
    [i] => 1
    [jump1_1] => 6
    [jump1_2] => 8
)
Array
(
    [x1] => 0
    [v1] => 3
    [x2] => 4
    [v2] => 2
    [first1] => 3
    [first2] => 6
    [i] => 2
    [jump1_1] => 6
    [jump1_2] => 8
    [jump2_1] => 9
    [jump2_2] => 10
)
Array
(
    [x1] => 0
    [v1] => 3
    [x2] => 4
    [v2] => 2
    [first1] => 3
    [first2] => 6
    [i] => 3
    [jump1_1] => 6
    [jump1_2] => 8
    [jump2_1] => 9
    [jump2_2] => 10
    [jump3_1] => 12
    [jump3_2] => 12
) */