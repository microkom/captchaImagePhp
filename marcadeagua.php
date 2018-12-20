<?php

$marca = imagecreatefrompng('logo.png');
$marca = imagescale($marca, 90);
imagealphablending($marca, false);

imagesavealpha($marca,true);

$marcaX = imagesx($marca);
$marcaY = imagesy($marca);

imagefilter($marca, IMG_FILTER_COLORIZE, 0, 0, 0, 70); //transparencia de la marga de aguay

$imagen = imagecreatefromjpeg('logo.jpg');
$destX = imagesx($imagen) -$marcaX -5;
$destY = imagesy($imagen) -$marcaY -5;

imagecopy($imagen, $marca, $destX, $destY, 0, 0, $marcaX, $marcaY);

header('content-type: image/jpeg');
imagejpeg($imagen);
imagedestroy($imagen);
imagedestroy($marca);

?>