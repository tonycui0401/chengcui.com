<?php 
include 'rnfunctions.php';
//http://localhost:8080/sample1/webservice2.php?json={%22UserName%22:1,%22FullName%22:2}
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);

//echo $json;

//$email = $_GET['email'];
$id = $_POST['id'];
$email = $_POST['email'];
$reason = $_POST['reason'];
 
$time = time();
  
  
  

mysql_query("SET NAMES 'utf8';");
$result1=mysql_query("select * from report");
           if(!mysql_num_rows($result1))
                     {
                             $newmid = 1;
                     }
                     if(mysql_num_rows($result1))
                     {
                          $result2=mysql_query("select max(id) as mid from report");
                 $row = mysql_fetch_array($result2);
                           $mid=$row['mid'];
                         $newmid = $mid +1;
                     }

  mysql_query("insert into report values($newmid, $id, '$reason', '$email', $time)");  






mysql_close($con);

?>




