<?php

// include 'phpqrcode/qrlib.php';

// $text = 'Ahammed Imtiaze';

// QRcode::png($text);
// echo 'hello world';


include 'phpqrcode/qrlib.php';

$text = 'Ahammed Imtiaze';

$path = 'images/';

$file = $path.uniqid().'.png';

$ecc = 'Q';

$pixel_size = 5;
$frame_size = 5;

QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);

echo "<center><img src='".$file."'></center>";
