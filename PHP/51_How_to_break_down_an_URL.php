<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">        
    <title>How to break down an URL - PHP Notes</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">

<h1 style="color: brown;">How to break down an URL</h1>

As you code PHP you will most likely get your self in a position where you need to break down an URL into several <br>
pieces. There's obviously more than one way of doing it depending on your needs. This article will explain those <br> 
ways for you so you can find what works best for you. <br>

<h2 style="color: brown;">Using parse_url()</h2>

<h2 style="color: brown;">Using explode()</h2>

<b>explode():</b> Returns an array of strings, each of which is a substring of string formed by splitting it on <br>
boundaries formed by the string delimiter. <br>

This function is pretty much straight forward.

<?php
  
$code = '<?php
    $url = "http://example.com/project/controller/action/param1/param2";
    $parts = explode(\'/\', $url);
?>';
highlight_string($code);

$url = "http://example.com/project/controller/action/param1/param2";

$urlparts = explode("/", $url);

echo "<pre>";
print_r($urlparts);
echo "</pre>";

echo "First Element: " . $urlparts[0] . "<br>";
echo "Second Element: " . $urlparts[2] . "<br>";
echo "Last Element: " . $urlparts[sizeof($urlparts)-1];

?>


</body>
</html>