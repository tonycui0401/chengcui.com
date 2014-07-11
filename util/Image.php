 <?php
/* ini_set('display_errors',1); 
  error_reporting(E_ALL);*/
 class Image
 {
 
 public static function resizeimg($imgfile, $target){
   list($width,$height) = getimagesize($imgfile);
    if ($width > $height)
        { $percentage = ($target / $width);

        } else {
            $percentage = ($target / $height);
            }
            $width = round($width * $percentage);
            $height = round($height * $percentage);
      return "width=\"$width\" height=\"$height\"";
}









public static function normalImg($filepost, $area, $originalfile, $cropwidth, $cropheight, $file, $largeimgfile, $largearea){
 //$filename =  $upload_dir.$a.".jpg";
 
$saveto = $originalfile;
  



  move_uploaded_file($filepost['tmp_name'], $saveto);
  
  copy($saveto, $largeimgfile);
   $typeok = TRUE;

   switch($filepost['type'])
   {
      case "image/gif": $src = imagecreatefromgif($saveto); break;

	  case "image/jpeg":
	  case "image/pjpeg":  $src = imagecreatefromjpeg($saveto); break;

	  case "image/png": $src = imagecreatefrompng($saveto); break;

	  default: $typeok = FALSE; break;
   }

   if($typeok)
   {
     list($w,$h) = getimagesize($saveto);
	 $max = $area;
	 $tw = $w;
	 $th = $h;

	 if($w > $h && $max < $w)
	 {
	   $th = $max / $w *$h;
	   $tw = $max;
	 }
	 elseif($h > $w && $max < $h)
	 {
	   $tw = $max / $h * $w;
	   $th = $max;
	 }
	 elseif($max < $w)
	 {
	   $tw = $th = $max;
	 }

	 $tmp = imagecreatetruecolor($tw, $th);
	 imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
	 imageconvolution($tmp, array(
	                       array(-1, -1, -1),
							array(-1, 16, -1),
							array(-1, -1, -1)
							), 8, 0);
	 imagejpeg($tmp, $saveto, 100);
	 imagedestroy($tmp);
	 imagedestroy($src);
   }
   
   
    copy($originalfile, $file);
   

$crop_width=$cropwidth;
$crop_height=$cropheight;


$original_image_size = getimagesize($file);
$original_width = $original_image_size[0];
$original_height = $original_image_size[1];


$original_image_gd = imagecreatefromjpeg($file);

$cropped_image_gd = imagecreatetruecolor($crop_width, $crop_height);

$wm = $original_width /$crop_width;
$hm = $original_height /$crop_height;
$h_height = $crop_height/2;
$w_height = $crop_width/2;

if($original_width > $original_height )
{
$adjusted_width =$original_width / $hm;
$half_width = $adjusted_width / 2;
$int_width = $half_width - $w_height;

imagecopyresampled($cropped_image_gd ,$original_image_gd ,-$int_width,0,0,0, $adjusted_width, $crop_height, $original_width , $original_height );
}
elseif(($original_width < $original_height ) || ($original_width == $original_height ))
{
$adjusted_height = $original_height / $wm;
$half_height = $adjusted_height / 2;
$int_height = $half_height - $h_height;

imagecopyresampled($cropped_image_gd , $original_image_gd ,0,-$int_height,0,0, $crop_width, $adjusted_height, $original_width , $original_height );
}
else {

imagecopyresampled($cropped_image_gd , $original_image_gd ,0,0,0,0, $crop_width, $crop_height, $original_width , $original_height );
}
imagejpeg($cropped_image_gd,$file,100);
   
   
   
   
   
   
 

  
$src = imagecreatefromjpeg($largeimgfile);

     list($w,$h) = getimagesize($largeimgfile);
	 $max = 500;
	 $tw = $w;
	 $th = $h;

	 if($w > $h && $max < $w)
	 {
	   $th = $max / $w *$h;
	   $tw = $max;
	 }
	 elseif($h > $w && $max < $h)
	 {
	   $tw = $max / $h * $w;
	   $th = $max;
	 }
	 elseif($max < $w)
	 {
	   $tw = $th = $max;
	 }

	 $tmp = imagecreatetruecolor($tw, $th);
	 imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
	 imageconvolution($tmp, array(
	                       array(-1, -1, -1),
							array(-1, 16, -1),
							array(-1, -1, -1)
							), 8, 0);
	 imagejpeg($tmp, $largeimgfile,100);
	 imagedestroy($tmp);
	 imagedestroy($src);
   
   
   
   
   
   
   
}



public static function cropImg($filepost, $cropwidth, $file){
 //$filename =  $upload_dir.$a.".jpg";
 
 
 
 //$saveto = $file;
 
 move_uploaded_file($filepost['tmp_name'], $file);
 
 

$crop_width=$cropwidth;
$crop_height=$cropheight;


$original_image_size = getimagesize($file);
$original_width = $original_image_size[0];
$original_height = $original_image_size[1];


$original_image_gd = imagecreatefromjpeg($file);

$cropped_image_gd = imagecreatetruecolor($crop_width, $crop_height);

$wm = $original_width /$crop_width;
$hm = $original_height /$crop_height;
$h_height = $crop_height/2;
$w_height = $crop_width/2;

if($original_width > $original_height )
{
$adjusted_width =$original_width / $hm;
$half_width = $adjusted_width / 2;
$int_width = $half_width - $w_height;

imagecopyresampled($cropped_image_gd ,$original_image_gd ,-$int_width,0,0,0, $adjusted_width, $crop_height, $original_width , $original_height );
}
elseif(($original_width < $original_height ) || ($original_width == $original_height ))
{
$adjusted_height = $original_height / $wm;
$half_height = $adjusted_height / 2;
$int_height = $half_height - $h_height;

imagecopyresampled($cropped_image_gd , $original_image_gd ,0,-$int_height,0,0, $crop_width, $adjusted_height, $original_width , $original_height );
}
else {

imagecopyresampled($cropped_image_gd , $original_image_gd ,0,0,0,0, $crop_width, $crop_height, $original_width , $original_height );
}
imagejpeg($cropped_image_gd,$file,100);




}




 
 }
 ?>