<?php //header('Access-Control-Allow-Origin: *'); 
  header('Content-type: application/json');
  include 'rnfunctions.php';
 $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml';
 //xml is the default
 $email = $_GET['email'];
 $username = $_GET['username']; 
 $password = $_GET['password'];
 //$phone = $_GET['phone'];// $bride = $_GET['bride']; 
 define("HASH_PASSWORD_KEY", "WRFFFDFDS324324444"); 
 function create($algo, $data)	 
 {	   
 $context = hash_init($algo, HASH_HMAC, HASH_PASSWORD_KEY);		
 hash_update($context, $data);	
 return hash_final($context);	
 }	  	
 $password = create('md5',$password,'saltIfThereIsOne');	
 //iconv(mb_detect_encoding($bridegroom, mb_detect_order(), true), "UTF-8", $bridegroom); //iconv(mb_detect_encoding($bride, mb_detect_order(), true), "UTF-8", $bride);  //$category = $_GET['category']; 
 $num =0; 
 

 $query1 = "SELECT * FROM user WHERE email = '$email' or username = '$username'";
 $result1 = mysql_query($query1,$con) or die('Errant query:  '.$query1);  
 $num = mysql_num_rows($result1);
 if($num==1)
 {
 $success = "0";
 }else{$success = "1";    
 }
 
 if($format == 'json')
 {   

 echo json_encode(array('total'=>$success)); 
 }?>