<?php 
include 'rnfunctions.php';

//$latitude = $_GET['latitude'];
//$longtitude = $_GET['longtitude'];
$email = $_GET['email'];
 $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the defaulth
  /* soak in the passed variable or set our own */
 /* $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
  $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
  $user_id = intval($_GET['user']); //no default

  /* connect to the db */
 
 mysql_query("SET NAMES 'utf8';");
  //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
 
  
   //$res_array = array();
   // for ($count=0; $row = mysql_fetch_assoc($result); $count++) 
	// {
    //$res_array[$count] = $row;
//	}
	
  //array();
  
  
  /*  function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;

  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));

  $dist = acos($dist);

  $dist = rad2deg($dist);

  $miles = $dist * 60 * 1.1515;

  $unit = strtoupper($unit);

  if ($unit == "K") {

    return ($miles * 1.609344);

  } else if ($unit == "N") {

      return ($miles * 0.8684);

    } else {

        return $miles;

      }

}*/

mysql_query("SET NAMES 'utf8';");
 
 /* $query1 = "select * from story inner join user where user.id = story.user_id";
  $result1 = mysql_query($query1,$con) or die('Errant query:  '.$query1);
  
  
  if(mysql_num_rows($result1)) {
    while($post = mysql_fetch_assoc($result1)) {
      //$posts[] = array('post'=>$post);
	  $distance = distance($latitude, $longtitude, $post['lat'], $post['lng'], "K");
	  $formatted_distance = number_format($distance, 2, '.', ' ');
	 // var_dump($formatted_distance);
	  //$post['latitude'] $post['longtitude']
	  mysql_query("update story set distance = $formatted_distance where lat = ".$post['lat']." and lng = ".$post['lng'].";");

    }
  }*/
  
  
  
   $query = "SELECT story.imgurl, story.id, story.urlid, story.description, story.category, story.distance, story.venue, story.viewed, story.liked, story.lat, story.lng FROM story inner join user on user.id = story.user_id WHERE user.email = '$email' order by story.added_time DESC";
  $result = mysql_query($query,$con) or die('Errant query:  '.$query);
  // $num = mysql_num_rows($result);
  // for($j=0;$j<$num;++$j)
   //{
     //$row = mysql_fetch_assoc($result)
	// echo $row[0]."<br/>";
	 // echo $row[1]."<br/>";
	 
   //}
  /* create one master array of the records */
  $posts = array();
  
  
  if(mysql_num_rows($result)) {
    while($post = mysql_fetch_assoc($result)) {
      $posts[] = array('post'=>$post);
    }
  }

  /* output in necessary format */
  if($format == 'json') {
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts));//array('posts'=>$posts));//$res_array);
	//array('posts'=>$posts));
  }
  else {
    header('Content-type: text/xml');
    echo '<posts>';
    foreach($posts as $index => $post) {
      if(is_array($post)) {
        foreach($post as $key => $value) {
          echo '<',$key,'>';
          if(is_array($value)) {
            foreach($value as $tag => $val) {
              echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
            }
          }
          echo '</',$key,'>';
        }
      }
    }
    echo '</posts>';
  }

  /* disconnect from the db */
  @mysql_close($link);
//}
 ?> 