<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">        
    <title>Unicode Support in PHP - PHP Notes</title>
</head>
<body style="font-family: 'Open Sans', sans-serif;">


<h1 style="color: brown;">Unicode Support in PHP</h1>

<h2 style="color: brown;">Converting Unicode characters to “\uxxxx” format using PHP</h2>

<?php
  
$code = '<?php
$unicode_encode = json_encode("Гоце Стојанов");
  
echo "Unicode encode: ", $unicode_encode . "<br>";

$unicode_decode = json_decode(sprintf(\'"%s"\', \'\u0413\u043e\u0446\u0435 \u0421\u0442\u043e\u0458\u0430\u043d\u043e\u0432\'));

echo "Unicode decode: " .  $unicode_decode . "<br>";

?>';
highlight_string($code);


  echo "<h3 style='color: brown;'>Use JSON encoding - decoding: </h3>";

  $unicode_encode = json_encode("我好");
  
  echo "Unicode encode: ", $unicode_encode . "<br>";

  $unicode_decode = json_decode(sprintf('"%s"', '\\u6211\\u597d'));

  echo "Unicode decode: " .  $unicode_decode . "<br>";

  //  Another Example
  $unicode_encode1 = json_encode("Гоце Стојанов");
  
  echo "Unicode encode: ", $unicode_encode1 . "<br>";

  $unicode_decode1 = json_decode(sprintf('"%s"', '\u0413\u043e\u0446\u0435 \u0421\u0442\u043e\u0458\u0430\u043d\u043e\u0432'));

  echo "Unicode decode: " .  $unicode_decode1 . "<br>";

  

?>

<h2 style="color: brown;">Intl extention for Unicode support</h2>

<p>
Native string functions are mapped to single byte functions, they do not work well with Unicode. The extentions  <br>
iconv and mbstring offer some support for Unicode, while the Intl-extention offers full support. Intl is a wrapper for <br>
the facto de standard ICU library, see <a href="http://site.icu-project.org">http://site.icu-project.org</a>  for detailed information that is not available on <br>
<a href="http://php.net/manual/en/book.intl.php">http://php.net/manual/en/book.intl.php</a>  . If you can not install the extention, have a look at an alternative <br>
implementation of Intl from the Symfony framework. <br>
</p>

ICU offers full Internationalization of which Unicode is only a smaller part. <br>
<br>

<?php
  $unicode_uconverter = \UConverter::transcode('Гоце Стојанов', 'UTF-8', 'UTF-8'); // strip bad bytes against attacks

  var_dump($unicode_uconverter);
?>


</body>
</html>