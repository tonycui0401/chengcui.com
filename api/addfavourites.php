<?php 
include 'rnfunctions.php';
$id = $_GET['id'];
$email = $_GET['email'];


  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";

  
  
  
  /*mysql_query("INSERT INTO `test` (UserName, FullName)
VALUES ('".$obj->{'UserName'}."', '".$obj->{'FullName'}."')");*/
$result1=mysql_query("select * from favourites");
           if(!mysql_num_rows($result1))
                     {
                             $newmid = 1;
                     }
                     if(mysql_num_rows($result1))
                     {
                          $result2=mysql_query("select max(id) as mid from favourites");
                 $row = mysql_fetch_array($result2);
                           $mid=$row['mid'];
                         $newmid = $mid +1;
                     }
if(!mysql_num_rows(mysql_query("select * from favourites where story_id = $id and email = '$email'"))){
  mysql_query("insert into favourites values($newmid, $id, '$email')");  
}else{
 
}


$num = mysql_num_rows(mysql_query("select * from favourites where story_id = $id"));
mysql_query("update story set favourites = $num where id = $id");


mysql_close($con);

?>




