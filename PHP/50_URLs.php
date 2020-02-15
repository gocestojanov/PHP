<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">        
    <title>URLs - 52 Chapter PHP Notes </title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color: brown;">URLs</h1>    

<h2 style="color: brown;">Parsing a URL</h2>

To separate a URL into its individual components, use <b>parse_url():</b> 
<br>
<?php 
     

    $code = '<?php
        $url = \'http://www.example.com/page?foo=1&bar=baz#anchor\';
        $parts = parse_url($url);
?>';
    highlight_string($code);

    $url = 'http://www.example.com/page?foo=1&bar=baz#anchor';
    $parts = parse_url($url);

    echo "<br><b>Output</b>";
    echo "<pre>";
    print_r($parts);
    echo "</pre>";    

    echo "<br>You can also selectively return just one component of the url. To return just the querystring:<br>";

$code1 = '<?php
    $url = \'http://www.example.com/page?foo=1&bar=baz#anchor\';
    $queryString = parse_url($url, PHP_URL_QUERY);
?>';
highlight_string($code1);    

$url1 = 'http://www.example.com/page?foo=1&bar=baz#anchor';
$queryString1 = parse_url($url1, PHP_URL_QUERY);


    echo "<br><b>Output</b></br>";
    echo $queryString1;

    echo "<br>To further parse a query string into key value pairs use <b>parse_str():</b><br>";
    
$code2 = '<?php
        $params = [];
        parse_str($queryString, $params);
?>';
highlight_string($code2);

$params = [];
parse_str($queryString1, $params);
echo "<br><b>Output</b>";
echo "<pre>";
print_r($params);
echo "</pre>";


    echo "<br><br>Any of the following constants are accepted: 
    <ul>
        <li>PHP_URL_SCHEME</li>
        <li>PHP_URL_HOST</li>
        <li>PHP_URL_PORT</li>
        <li>PHP_URL_USER</li>
        <li>PHP_URL_PASS</li>
        <li>PHP_URL_PATH</li>
        <li>PHP_URL_QUERY</li>
        <li>PHP_URL_FRAGMENT</li>
    </ul>";            
?>

<h2 style="color: brown;">Build an URL-encoded query string from an array</h2>

The <b> http_build_query() </b>  will create a query string from an array or object. These strings can be appended to a URL <br>
to create a GET request, or used in a POST request with, for example, cURL. <br>

<?php

$code3 = '<?php
$parameters = array(
    \'parameter1\' => \'foo\',
    \'parameter2\' => \'bar\',
    );
    $queryString = http_build_query($parameters);
?>';
highlight_string($code3);

$parameters = array(
    'parameter1' => 'foo', 
    'parameter2' => 'bar', 
);

$queryString2 = http_build_query($parameters);
echo "<br><b>Output</b>";

echo "<br>" . htmlentities($queryString2);

echo "<br><b>http_build_query()</b> will also work with multi-dimensional arrays.";

?>

<h2 style="color: brown;">Redirecting to another URL</h2>

You can use the <b>header()</b> function to instruct the browser to redirect to a different URL: <br>

<?php


$code4 = '<?php
    $url = \'https://example.org/foo/bar\';
    if (!headers_sent()) 
    { 
        // check headers - you can not send headers if they already sent
        header(\'Location: \' . $url);
        exit; // protects from code being executed after redirect request
    } 
    else 
    {
        throw new Exception(\'Cannot redirect, headers already sent\');
    }
?>';
highlight_string($code4);

    $url = 'https://example.org/foo/bar';

    // if (!headers_sent()) { // check headers - you can not send headers if they already sent
    //         header('Location: ' . $url);
    //         exit; // protects from code being executed after redirect request
    // } else {
    //         throw new Exception('Cannot redirect, headers already sent');
            
    // }

    try {
        if (!headers_sent()) { // check headers - you can not send headers if they already sent
            header('Location: ' . $url);
            exit; // protects from code being executed after redirect request
        } else {             
                throw new Exception('Cannot redirect, headers already sent!!!');                
        }
    } catch (Exception $e) {
        echo "<br><b>Output</b><br>";
        echo $e->getMessage();
        echo "<br>";
    }

echo "<br><br>If headers have been sent, you can alternatively send a meta refresh HTML tag.<br><br>";

$code5 = '<?php
    $url1 = \'https://example.org/foo/bar\';
    if (!headers_sent()) {
        header(\'Location: \' . $url1);
    } else {
        $saveUrl = htmlspecialchars($url1);         
        print \'<meta http-equiv="refresh" content="20; url=\' . $saveUrl . \'">\';        
        print \'<p>Please continue to <a href="\' . $saveUrl . \'">\' . $saveUrl . \'</a></p>\';
    }
    exit;
?>';
highlight_string($code5);    

    $url1 = 'https://example.org/foo/bar';
    if (!headers_sent()) {
        header('Location: ' . $url1);
    } else {
        $saveUrl = htmlspecialchars($url1);         
        print '<meta http-equiv="refresh" content="20; url=' . $saveUrl . '">';        
        print '<p>Please continue to <a href="' . $saveUrl . '">' . $saveUrl . '</a></p>';
    }
    exit;


    
?>


</body>
</html>