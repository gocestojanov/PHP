<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Getting Starting with PHP</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">

<h1 style="color: brown">Non-HTML output from web server</h1>

In some cases, when working with a web server, overriding the web server's default content type may be required. <br>
There may be cases where you need to send data as plain text, JSON, or XML, for example. <br>
<br>
The <b>header()</b>  function can send a raw HTTP header. You can add the Content-Type header to notify the browser of <br>
the content we are sending. <br>

<?php
  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$code = '<?php
    header("Content-Type: text/plain");
    echo "Hello World";
?>';
highlight_string($code);

echo "<br>To produce JSON content, use the <b>application/json</b> content type instead: <br>";


$code1 = '<?php
    header(\'Content-Type: application/json\');

    $data = [\'response\' => "Hello World!!!", ];

    echo json_encode($data);

?>';
highlight_string($code1);


?>





</body>
</html>