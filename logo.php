<?php
header('Content-Type: image/png');
$logo = imagecreatefrompng('logo.png');
imageAlphaBlending($logo, true);
imageSaveAlpha($logo, true);
imagepng($logo);
imagedestroy($logo);

?>