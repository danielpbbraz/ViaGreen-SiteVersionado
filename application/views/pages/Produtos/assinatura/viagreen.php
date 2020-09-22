<?php

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('email.jpg');
  
  //Set the Content Type
  header('Content-type: image/jpeg');

  // Allocate A Color For The Text
  $black = imagecolorallocate($jpg_image, 100, 100, 100);
  
    // Allocate A Color For The Text
  $cinza = imagecolorallocate($jpg_image, 109, 110, 112);
  
      // Allocate A Color For The Text
  $verde = imagecolorallocate($jpg_image, 0, 171, 171);

  

  // Set Path to Font File
  $font_path = 'gulim.ttf';
  $minspacing=1;


  // NOME 
	$text = $_GET['nome'];
   imagettftext($jpg_image, 16, 0, 20, 135	, $cinza, $font_path, $text);
  
  
  // CARGO
 	$text2 = $_GET['cargo'];
  imagettftext($jpg_image, 11, 0, 20, 152, $verde, $font_path, $text2);
 
  
    // email
 	$text3 = $_GET['email'];
  imagettftext($jpg_image, 11, 0, 20, 169, $cinza, $font_path, $text3);
  
  // cel
 	$text4 = $_GET['cel'];
  imagettftext($jpg_image,11, 0, 20, 186, $cinza, $font_path, $text4);
  
   // end
 	$text5 = $_GET['end'];
  imagettftext($jpg_image,10, 0, 20, 206, $cinza, $font_path, $text5);
  
  // contat
 	$text6 = 'contato@viagreen.org.br';
  imagettftext($jpg_image,10, 0, 20, 276, $cinza, $font_path, $text6);
  
  // site
 	$text7 = 'viagreen.org.br';
  imagettftext($jpg_image,12, 0, 20, 292, $verde, $font_path, $text7);

 
  //imagejpeg($jpg_image,NULL,100);
  imagepng($jpg_image);
  
  // Clear Memory
  imagedestroy($jpg_image);
 
?>

