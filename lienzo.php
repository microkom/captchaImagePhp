<?php

// Creación y configuración del lienzo
$alto = $ancho = 200;
$imagen = imagecreatetruecolor($ancho, $alto);
$blanco = imagecolorallocate($imagen, 255, 255, 255);
$azul = imagecolorallocate($imagen, 255, 44, 33);

// Se dibuja la imagen
imagefill($imagen, 0, 0, $azul);
imageline($imagen, 0, 100, $ancho, 100, $blanco);
imagestring($imagen, 4, 50, 150, 'DWES', $blanco);

// Generación de la imagen.
header('content-type: image/png');
imagepng ($imagen);

// Liberamos la imagen de memoria.
imagedestroy($imagen);
?>