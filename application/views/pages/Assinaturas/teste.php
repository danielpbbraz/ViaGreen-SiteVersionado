<?PHP 
//oi
function imagettftextwrap($im, $size, $angle, $x_pos, $y_pos, $color, $font, $instr) 
{ 
    $box = @imagettfbbox($size, 0, $font, $instr); 
    $width = abs($box[4] - $box[0]); 
    $height = abs($box[3] - $box[5]); 
    $overlap = (($x_pos + $width) - imagesx($im)); 
    if($overlap > 0) //if the text doesn't fit on the image 
    { 
        $chars = str_split($instr); 
        $str = ""; 
        $pstr = ""; 
        for($m=0; $m < sizeof($chars); $m++) 
        { 
            $bo = imagettfbbox($fsize1, 0, $font1, $str); 
            $wid = abs($bo[4] - $bo[0]); 
            if(($x_pos + $wid) < imagesx($im)) //add one char from the string as long as it's not overflowing 
            { 
                $pstr .= $chars[$m]; 
                $bo2 = imagettfbbox($fsize1, 0, $font1, $pstr); 
                $wid2 = abs($bo2[4] - $bo2[0]); 
                if(($x_pos + $wid2) < imagesx($im)) 
                { 
                    $str .= $chars[$m]; 
                }    
                else 
                { 
                    break; 
                } 
            } 
            else 
            { 
                break; 
            } 
        } 
        $restof = ""; 
        for($l=$m; $l < sizeof($chars); $l++) 
        { 
            $restof .= $chars[$l]; //add the rest of the string to a new line 
        } 
        imagettftext($im, $size, $angle, $x_pos, $y_pos, $color, $font, $str); // print out the smaller line 
        imagettftext($im, $size, $angle, 0, $y_pos + $height, $color, $font, $restof); //and the rest of it 
    } 
    else 
    { 
        imagettftext($im, $size, $angle, $x_pos, $y_pos, $color, $font, $instr); //otherwise just do normally 
    } 

} 

?>