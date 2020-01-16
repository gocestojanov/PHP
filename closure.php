<?php

$greet = function($num) {
  return "A $num greetings!";
};


echo "From us all: {$greet(10 ** 3)} \n";


function greet($num)
{
 return "A $num greetings!";
}

echo "From us all: " . greet(10 ** 4) . "\n";
