<?php
/**
 * Converting an image to ascii art.
 *
 * @author	PHPPRO	http://www.phpro.org/examples/Image-To-Ascii-Art-With-PHP.html
 * 
 * @param mixed	binary or string of an image
 **/
function image2ascii($image)
{
    // return value
    $ret = '';

    // open the image
	// $img = imagecreatefromjpeg($image); PHPPRO originally do this
	$img = imagecreatefromstring($image); // my little hack
	
    // get width and height
    $width = imagesx($img); 
    $height = imagesy($img); 
	
    // loop for height
    for ($h = 0;$h < $height; $h++) {
        // loop for height
        for ($w = 0; $w <= $width; $w++) {
            // add color
            $rgb = ImageColorAt($img, $w, $h); 
            $r = ($rgb >> 16) & 0xFF; 
            $g = ($rgb >> 8) & 0xFF; 
            $b = $rgb & 0xFF;
			
            // create a hex value from the rgb
            $hex = '#'.str_pad(dechex($r), 2, '0', STR_PAD_LEFT).str_pad(dechex($g), 2, '0', STR_PAD_LEFT)
					.str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

            // now add to the return string and we are done
            if ($w == $width) { 
                $ret .= '<br>'; 
            } else { 
                $ret .= '<b style="color:'.$hex.';">#</b>'; 
            } 
        } 
    } 
    return $ret;
} 