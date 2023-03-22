<?php

if(isset($_POST['submit'])){
$img = imagecreatefromjpeg($fileDestination);

$width  = imagesx($img);
$height = imagesy($img);


$width_mini = 200; 
$height_mini = 125; // wysokosc obrazka
$img_mini = imagecreatetruecolor($width_mini, $height_mini);


imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);

$min_save_file = 'images/miniatury/'.$fileNameNew.''; // nazwa miniaturki

imagejpeg($img_mini, $min_save_file, 100); // utworzona miniaturka liczba (80) oznacza jakos obrazka od 0 do 100
imagedestroy($img);
imagedestroy($img_mini);
}





if(isset($_POST['submit'])){

$text=$_POST['watermark'];	

$imagetobewatermark=imagecreatefromjpeg($fileDestination);

$font='czcionka/VT323-Regular.ttf';
$fontsize="15";
$white = imagecolorallocate($imagetobewatermark, 255, 255, 255);
imagettftext($imagetobewatermark, $fontsize, 0, 20, 10, $white, $font, $text);

$watermarkfileName='images/znakwodny/'.$fileNameNew.'';

imagejpeg($imagetobewatermark, $watermarkfileName, 100);
imagedestroy($imagetobewatermark);
}
?>