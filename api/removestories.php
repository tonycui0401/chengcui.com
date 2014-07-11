
<?php 

include 'rnfunctions.php';



$id = $_GET['id'];
$email = $_GET['email'];


$result1=mysql_query("select id from user where email = '$email';");
$row1 = mysql_fetch_array($result1);
$user_id=$row1['id'];



$result2=mysql_query("select imgurl from story where id= $id and user_id = $user_id;");
$row2 = mysql_fetch_array($result2);
$imgurl=$row2['imgurl'];

$pieces = explode("/", $imgurl);
$dir = dirname(__FILE__);
//$file_path = $pieces[3]."/".$pieces[4]."/".$pieces[5]."/".$pieces[6];


$file_path = "/".$pieces[4]."/".$pieces[5]."/".$pieces[6];
echo $dir.$file_path;

//echo $file_path;

if (file_exists($dir.$file_path)) {
        unlink($dir.$file_path);	
	  //echo "yes";
	}
	


mysql_query("delete from story where id= $id and user_id = $user_id;");







mysql_close($con);








/*$query = "http://www.pixstorie.com/api/stories/cuicheng18@hotmail.com/53692356f005d.jpg";
/home/qqelnpml/public_html/pixstorie/stories/cuicheng18@hotmail.com/53692356f005d.jpgno
if(file_exists($dir)){
echo "true";
}else{
echo "false";
}*/


?>

