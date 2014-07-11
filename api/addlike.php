<?php 
include 'rnfunctions.php';

//$email = $_GET['email'];
$id = $_GET['id'];
$email = $_GET['email'];


$result1=mysql_query("select * from userlike");
           if(!mysql_num_rows($result1))
                     {
                             $newmid = 1;
                     }
                     if(mysql_num_rows($result1))
                     {
                          $result2=mysql_query("select max(id) as mid from userlike");
                 $row = mysql_fetch_array($result2);
                           $mid=$row['mid'];
                         $newmid = $mid +1;
                     }

if(!mysql_num_rows(mysql_query("select * from userlike where story_id = $id and email = '$email'"))){
  mysql_query("insert into userlike values($newmid, $id, '$email')");  
}else{
 
}



$num = mysql_num_rows(mysql_query("select * from userlike where story_id = $id"));
mysql_query("update story set liked = $num where id = $id");




mysql_close($con);

?>

