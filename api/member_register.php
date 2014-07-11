<?php
include 'rnfunctions.php';
 //header('Access-Control-Allow-Origin: *'); 
 $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
 
 $email = $_POST['email'];
 $username = $_POST['username'];
 $username = strtolower($username);
 $password = $_POST['password'];
 //$phone = $_GET['phone'];
// $bride = $_GET['bride'];
 define("HASH_PASSWORD_KEY", "WRFFFDFDS324324444");
 
  function create($algo, $data)
	  {
	     $context = hash_init($algo, HASH_HMAC, HASH_PASSWORD_KEY);
		 hash_update($context, $data);
		 return hash_final($context);
	  }
	  
	$password = create('md5',$password,'saltIfThereIsOne');
	  
 //iconv(mb_detect_encoding($bridegroom, mb_detect_order(), true), "UTF-8", $bridegroom);
 //iconv(mb_detect_encoding($bride, mb_detect_order(), true), "UTF-8", $bride);
  //$category = $_GET['category'];
  $num =0;
  
 
 $msg = " ".var_dump($_FILES)." ";


if($_FILES["userfile"]["size"] == 0){
//$new_image_name =  "users/".$username.".jpg";
$defaulturl = "http://www.pixstorie.com/api/users/default.jpg";
}else{
$new_image_name =  "users/".$username.".jpg";
$defaulturl = "http://www.bargainerapp.com/api/users/".$username.".jpg";
move_uploaded_file($_FILES["userfile"]["tmp_name"], $new_image_name);
}
 
  $query1 = "SELECT * FROM user WHERE email = '$email' or username = '$username'";

$result1 = mysql_query($query1,$con) or die('Errant query:  '.$query1);
   
   $num = mysql_num_rows($result1);

if($num==1)
{
$success = 0;
}else{
$success = 1;
    
    $result2=mysql_query("select * from user");
    if(!mysql_num_rows($result2))
    {
        $newmid = 1;
    }
    if(mysql_num_rows($result2))
    {
        $result3=mysql_query("select max(id) as mid from user");
        $row = mysql_fetch_array($result3);
        $mid=$row['mid'];
        $newmid = $mid +1;
    }

    
    
mysql_query("insert into user values($newmid, '$username', '$password', '$email', '$defaulturl')");

}
 


 
if($format == 'json') {
 
  echo json_encode(array('total'=>$success));

 }
?>