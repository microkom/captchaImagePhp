<?php
$img_org = imagecreatefromgif("dwes.gif");
$ancho_dst = intval(imagesx($img_org) / 2);
$alto_dst = intval(imagesy($img_org) / 2);
$img_dst = imagecreatetruecolor($ancho_dst, $alto_dst);
imagecopyresized($img_dst, $img_org, 0, 0, 0, 0,
$ancho_dst, $alto_dst,
imagesx($img_org), imagesy($img_org));
header("Content-type: image/png");
imagepng($img_dst);
imagedestroy($img_org);
imagedestroy($img_dst);

?>