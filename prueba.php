<?php

/*Fuentes windows 7*/

$fonts = array('timesi','times','arial','arialbd','arialbi','ariali','consola','consolai','consolab','consolaz','cour','sylfaen','cambriab','mangalb','segoeui','seguisym','pala','nyala','msyi','trebuc','phagspa');

$fontRoute = 'c:\windows\fonts\\';//ruta principal de las fuentes

$img_width = 300;
$img_height = 120;

/*
$alto = 600;
$ancho = 800;
*/

$img = imagecreatetruecolor($img_width, $img_height);

$black = imagecolorallocate($img, 0, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue  = imagecolorallocate($img, 0, 200, 250);
$orange = imagecolorallocate($img, 255, 200, 0);
$brown = imagecolorallocate($img, 220, 110, 0);
$imagen = imagecreatetruecolor($img_width, $img_height);
$azul = imagecolorallocate($imagen, 255, 255, 255);
$blanco = imagecolorallocate($imagen, 0, 0, 64);
$red = imagecolorallocate($imagen, 64, 0, 0);

imagefill($img, 0, 0, $white);

/*imagestringup($img, 5, $img_width*19/20, $img_height*19/20, 'This sentence was written using imagestringup()!', $blue);
imagestring($img, 5, $img_width/20, $img_height/20, 'This sentence was written using imagestring()!', $red);*/

// Creación y configuración del lienzo



// Se dibuja la imagen

function n1(){	return rand( 33,110);}
function n2(){	return rand( 10,270);}
function n3(){	return rand( 200,280);}
function n4(){	return rand( 33,110);}
function n5(){	return rand( 250,280);}


//imágenes aleatorias
$counter =0;
if(rand(0,1)>0){
   imageline($img, n1(), n1(), n3(), n1(), $blanco);
   imagesetthickness($img, rand(1,5));
   $counter++;
}
if(rand(0,1)>0){
   imageline($img, n1(), n1(), n3(), n1(), $blanco);
   imagesetthickness($img, rand(1,5));
   $counter++;
}
if(rand(0,1)>0 || $counter < 2 ){
   imageline($img, n1(), n1(), n3(), n1(), $blanco);
   imagesetthickness($img, rand(1,5));
   $counter++;
}

if(rand(0,1)>0 || $counter < 2){
   imagearc($img, n2(), n2(), n2(), n1(),  n1(), n5(),$blanco);
   imagesetthickness($img, rand(1,5));
   $counter++;
}
/*if(phpversion()>5){// no funciona en versiones inferiores o iguales a 5
   if(rand(0,1)>0 || $counter < 3){
	imageopenpolygon($imagen, array(n1(),n1(),n3(), n1(), n1(), n1()), 3,$red);
	$counter++;
}
}*/
/*---------------------*/

$randomWord =array();

//imagestring($img, 5, $img_width/2-30, $img_height/2, $_SESSION['randomWord'], $blanco);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2-60, $img_height/2+10, $black, $font, $letter);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2-40, $img_height/2+10, $black, $font, $letter);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2-20, $img_height/2+10, $black, $font, $letter);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2, $img_height/2+10, $black, $font, $letter);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2+20, $img_height/2+10, $black, $font, $letter);

$font = $fontRoute.$fonts[rand(0,sizeof($fonts)-1)].'.ttf';
$randomWord[] = $letter = randomLetter();
imagettftext($img, 22, rand(-45,45), $img_width/2+40, $img_height/2+10, $black, $font, $letter);

$ran = implode($randomWord);




function randomWord(){
   $word ="";
   for ($i = 0; $i<rand(5,8) ; $i++){
      $word .= randomLetter();
   }
   return $word;
}

function randomLetter(){		
   $texto ="ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
   return $texto[rand(0,strlen($texto)-1)];
}
/*

         $merriweather = dirname(__FILE__) . '/Merriweather-Regular.ttf';
         imagettftext($img, 24, 90, $img_width*9/10, $img_height*19/20, $black, $merriweather, 'This is Merriweather Regular Font!');

         $patua_one = dirname(__FILE__) . '/PatuaOne-Regular.ttf';
         imagettftext($img, 32, 0, $img_width/20, $img_height*3/10 + 2, $black, $patua_one, 'This is Patua One Font!');
         imagettftext($img, 32, 0, $img_width/20, $img_height*3/10, $orange, $patua_one, 'This is Patua One Font!');

         $monoton = dirname(__FILE__) . '/Monoton-Regular.ttf';
         imagettftext($img, 72, 0, $img_width/20, $img_height*5.5/10 - 5, $brown, $monoton, 'MONOTON');
         imagettftext($img, 72, 0, $img_width/20, $img_height*5.5/10 + 5, $orange, $monoton, 'MONOTON');
         imagettftext($img, 72, 0, $img_width/20, $img_height*5.5/10, $blue, $monoton, 'MONOTON');

         $kaushan = dirname(__FILE__) . '/KaushanScript-Regular.ttf';
         imagettftext($img, 84, 0, $img_width/20, $img_height*8/10 - 2, $brown, $kaushan, 'Good Night!');
         imagettftext($img, 84, 0, $img_width/20, $img_height*8/10 + 2, $black, $kaushan, 'Good Night!');
         imagettftext($img, 84, 0, $img_width/20 - 2, $img_height*8/10, $brown, $kaushan, 'Good Night!');
         imagettftext($img, 84, 0, $img_width/20 + 2, $img_height*8/10, $black, $kaushan, 'Good Night!');
         imagettftext($img, 84, 0, $img_width/20, $img_height*8/10, $white, $kaushan, 'Good Night!');
*/

header("Content-type: image/png");
imagepng($img);
?>
