<?php
$con = mysql_connect('localhost','qqelnpml_cheng','a135797S') or die('Cannot connect to the DB');
mysql_select_db('qqelnpml_pixstorie',$con);
mysql_set_charset("utf8", $con); 
 
  mysql_query("SET NAMES 'utf8';");
 
 function queryMysql($query)
 { 
   $result = mysql_query($query) or die(mysql_error());
   return $result;
 }
 
 function destroySession()
 {
      $_SESSION = array();
	  if(session_id() != ""|| isset($_COOKIE[session_name()]))
	     setcookie(session_name(), '', time()-2592000, '/');
		 
	  session_destroy();
 }
  function sanitizeString($var)
 {
    $var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	return mysql_real_escape_string($var);
 }
 function showimg($user)
 {
  $mainfolder = "userfiles/$user-img/";
if(mysql_num_rows(queryMysql("select * from userimg where user = '$user'")))
          {
$query1 = "select imgid from userimg where user = '$user'order by time desc limit 0,1";
               $result1 = queryMysql($query1);
                  $row1 = mysql_fetch_object($result1);
                        $imgid1 = $row1->imgid;
      $filename1 = $mainfolder.$imgid1.".jpg";
          }
          return $filename1;
      }
  function showProfile($user)
 {
   $mainfolder = "userfiles/$user-img/";
if(mysql_num_rows(queryMysql("select * from userimg where user = '$user'")))
          {
$query1 = "select imgid from userimg where user = '$user'order by time desc limit 0,1";
               $result1 = queryMysql($query1);
                  $row1 = mysql_fetch_object($result1);
                        $imgid1 = $row1->imgid;
      $filename1 = $mainfolder.$imgid1.".jpg";
          }

    if(file_exists($filename1))
      echo "<img src=\"$filename1\" border=\"1\" align=\"left\" />";
   if(!file_exists($filename1))
      echo "<div style=\"clear:left\"><img src=\"default.jpg\" border=\"1\" align=\"left\" /></div>";
   $result = queryMysql("select * from rnprofiles where user ='$user'");
   if(mysql_num_rows($result))
   {
      $row = mysql_fetch_row($result);
	  echo "<div style=\"margin-left:10px;width:250px;word-wrap:break-word;float:left;\">".stripslashes($row[1])."</div><br clear = left /><br/>";
   }
 }
 function getHeight($image) {
	$size = getimagesize($image);
	$height = $size[1];
	return $height;
}
function getWidth($image) {
	$size = getimagesize($image);
	$width = $size[0];
	return $width;
}
 function resizeThumbnailImage($thumb_image_name, $image, $width, $height, $start_width, $start_height, $scale){
	$newImageWidth = ceil($width * $scale);
	$newImageHeight = ceil($height * $scale);
	$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
	$source = imagecreatefromjpeg($image);
	imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
	imagejpeg($newImage,$thumb_image_name,90);
	chmod($thumb_image_name, 0777);
	return $thumb_image_name;
}


function sampleimg($file,$saveto,$area)
{
   move_uploaded_file($file['tmp_name'], $saveto);
   $typeok = TRUE;

   switch($file['type'])
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
	 imagejpeg($tmp, $saveto);
	 imagedestroy($tmp);
	 imagedestroy($src);
   }
}
function resizeimg($imgfile, $target){
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
function delete_files($myfiles){
if(file_exists($myfiles))
{ $fh = fopen($myfiles, 'w');
    fclose($fh);
    unlink($myfiles);
}
if(!file_exists($myfiles))
{ return false;}
return true;
}


 function delete_directory($dirname) {
      if (is_dir($dirname))
         $dir_handle = opendir($dirname);
     if (!$dir_handle)
         return false;
      while($file = readdir($dir_handle)) {
         if ($file != "." && $file != "..") {
           if (!is_dir($dirname."/".$file))
             unlink($dirname."/".$file);
         else
      delete_directory($dirname.'/'.$file);
       }
    }
   closedir($dir_handle);
    rmdir($dirname);
   return true;
   }
  

?> 