<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">    
    <title>Utf-8 - Chapter 51</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    
<h1 style="color: brown;">Utf-8</h1>    

<h2 style="color: brown;">Input</h2>
<p>
You should verify every received string as being valid UTF-8 before you try to store it or use it anywhere. <br>
PHP's <b>mb_check_encoding()</b>  does the trick, but you have to use it consistently. There's really no way around <br>
this, as malicious clients can submit data in whatever encoding they want. <br>
</p>
<br>
<?php
$code = '<?php
$string = $_REQUEST[\'user_comment\'];
if (!mb_check_encoding($string, \'UTF-8\')) {
    // the string is not UTF-8, so re-encode it.
    $actualEncoding = mb_detect_encoding($string);
    $string = mb_convert_encoding($string, \'UTF-8\', $actualEncoding);
}
?>';
highlight_string($code);  
?>

<p>
If you're using HTML5 then you can ignore this last point. You want all data sent to you by browsers to be
in UTF-8. The only reliable way to do this is to add the accept-charset attribute to all of your <form> tags like
so:
</p>

<?php

$code1 = '
<form action="somepage.php" accept-charset="UTF-8">
';
highlight_string($code1);

?>
<h2 style="color: brown;">Output</h2>

<p>
If your application transmits text to other systems, they will also need to be informed of the character <br>
encoding. In PHP, you can use the default_charset option in php.ini, or manually issue the Content-Type <br>
MIME header yourself. This is the preferred method when targeting modern browsers. <br>
</p>

<?php

$code2 = '
header(\'Content-Type: text/html; charset=utf-8\');
';
highlight_string($code2);  
?>

<p>
If you are unable to set the response headers, then you can also set the encoding in an HTML document with HTML metadata.
<br> <br>
<b>HTML5</b> 
<br> <br>
<?php
  $newcode  = htmlspecialchars('<meta charset="utf-8">');
  echo $newcode;
?>
</p>

<h2 style="color: brown;">Storing Data in a MySQL Database:</h2>

<p>
    Specify the utf8mb4 character set on all tables and text columns in your database. This makes MySQL <br>
physically store and retrieve values encoded natively in UTF-8. <br>
<br>
MySQL will implicitly use utf8mb4 encoding if a utf8mb4_* collation is specified (without any explicit <br>
character set). <br>
<br>
Older versions of MySQL (< 5.5.3) do not support utf8mb4 so you'll be forced to use utf8, which only <br>
supports a subset of Unicode characters. <br>
</p>
<br>
If you're using the PDO abstraction layer with PHP ? 5.3.6, you can specify charset in the DSN:
<br>
<?php
  $code3 = 
  '<?php
    $handle = new PDO(\'mysql:charset=utf8mb4\');
?>';
  highlight_string($code3);
?>    



</body>
</html>