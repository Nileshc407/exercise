<?php

require "vendor/autoload.php";
$qrcode = new Zxing\QrReader('frame.png');
$text = $qrcode->text();
echo $text;
exit;
?>