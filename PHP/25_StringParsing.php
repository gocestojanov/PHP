<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">    
    <title>25 String Parsing - PHP Notice</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color:brown;">String Parsing</h1>

<h2 style="color:brown;">Splitting a string by separators</h2>

<b>explode</b> and <b>strstr</b>  are simpler methods to get substrings by separators. <br>
A string containing several parts of text that are separated by a common character can be split into parts with the <br>
<b>explode</b> function. <br>

<?php
  
$code = '<?php
    $fruits = "apple,pear,grapefruit,cherry";
    $fruits_array = explode(\',\',$fruits);
    $fruits_array = explode(\',\',$fruits,0);
    $fruits_array = explode(\',\',$fruits,2);

    $email = "gocestojanov@gmail.com";
    list($name, $domain) = explode("@", $email);
    $string = "1:23:456";
    echo json_encode(explode(\':\',$string));
    var_dump(strstr($string, ":")); 
    var_dump(strstr($string, ":", true)); 
?>';
highlight_string($code);

    echo "<br><br><b style='color:brown'> Result: </b> <br>";
    

    echo "<br>";

    $fruits = "apple,pear,grapefruit,cherry";

    $fruits_array = explode(',',$fruits);

    print_r($fruits_array);
    
    echo "<br>";

    $fruits_array1 = explode(',',$fruits,0);

    print_r($fruits_array1);

    echo "<br>";    

    $fruits_array2 = explode(',',$fruits,2);

    print_r($fruits_array2);

    echo "<br><br>";    

    echo "explode can be combined with <b>list</b> to parse a string into variables in one line:";

    echo "<br><br>";    

    $email = "gocestojanov@gmail.com";
    list($name, $domain) = explode("@", $email);
    echo "Name: {$name}, domain: ${domain}";
    echo "<br><br>";    
    echo "<b>strstr</b> strips away or only returns the substring before the first occurrence of the given needle.";
    echo "<br><br>";    

    $string = "1:23:456";
    echo json_encode(explode(':',$string));
    echo "<br>";    
    var_dump(strstr($string, ":")); 
    echo "<br>";    
    var_dump(strstr($string, ":", true)); 

?>

<h2 style="color:brown;">Substring</h2>

Substring returns the portion of string specified by the start and length parameters. <br>
<br>
<?php
  
$code1 = '<?php
    echo substr(\'Boo\', 1);
    $name = "Гоце";
    echo substr($name, 0,4);
    echo mb_substr($name,0,4);    
    echo substr_replace(\'Boo\',\'ts\',strlen(\'Boo\'));
?>';
highlight_string($code1);


    echo "<br><br><b style='color:brown'> Result: </b> <br>";


    echo substr('Boo', 1);

    echo "<br>";        
    echo "If there is a possibility of meeting multi-byte character strings, then it would be safer to use <b> mb_substr.</b>";
    echo "<br>";    

    $cake = "Гоце";
    echo substr($cake, 0,4);
    echo "<br>";    
    echo mb_substr($cake,0,4);    
    echo "<br>";
    echo "<br>";
    echo "Another variant is the substr_replace function, which replaces text within a portion of a string.";
    echo "<br>";    
    echo substr_replace('Boo','ts',strlen('Boo'));
    echo "<br>";



?>


</body>
</html>