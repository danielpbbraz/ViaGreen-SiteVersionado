<?php
//Set the Content Type
header('Content-type: image/jpeg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('1.jpg');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 255, 255, 255);

// Set Path to Font File
$font_path = 'font.TTF';

// Set Text to Be Printed On Image
$text = "Trường trung học cơ sở!";

// Print Text On Image
imagettftext($jpg_image, 55, 0, 100, 100, $white, $font_path, $text);

// Send Image to Browser
imagejpeg($jpg_image, "out.jpg");

// Clear Memory
imagedestroy($jpg_image);

?>