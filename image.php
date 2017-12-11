<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);

$deployment = getenv("COLOR");

if ( $deployment == 'blue') {
  $color = imagecolorallocate($im, 0, 0, 155);
} elseif ($deployment == 'green')  {
  $color = imagecolorallocate($im, 0, 155, 0);
} else {
  $color = imagecolorallocate($im, 0, 0, 155);
}

// Draw a filled rectangle
imagefilledrectangle($im, 0, 0, 199, 199, $color);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
