<?php

$my_file = 'file.txt';

$handle = fopen($my_file, 'r+') or die('Cannot open file:  '.$my_file);


$data = "This is the data\n";


fwrite($handle, $data);


$handle1 = fopen($my_file, 'r');

$data1 = fread($handle1,filesize($my_file));

echo $data1 . ": in file.txt";

fclose($handle);

/*
header("Content-Type: application/json");
// Create a PHP data array.
$data = ["response" => "Hello World"];
// json_encode will convert it to a valid JSON string.
echo json_encode($data);

 */
