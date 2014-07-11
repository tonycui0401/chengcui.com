<?php 
include 'rnfunctions.php';
//http://localhost:8080/sample1/webservice2.php?json={%22UserName%22:1,%22FullName%22:2}
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);

//echo $json;

//$email = $_GET['email'];
$id = $_GET['id'];
$email = $_GET['email'];


  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";

  
  
  
  /*mysql_query("INSERT INTO `test` (UserName, FullName)
VALUES ('".$obj->{'UserName'}."', '".$obj->{'FullName'}."')");*/


mysql_query("delete from favourites where story_id= $id and email = '$email';");




mysql_close($con);
?>