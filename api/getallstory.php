<?php 

 include 'rnfunctions.php';
       

  /* soak in the passed variable or set our own */
  $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
  $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
  $user_id = intval($_GET['user']); //no default
  $city = $_GET['city'];
  $category = $_GET['category'];
   $latitude = $_GET['latitude'];
  $longtitude = $_GET['longtitude'];
  /* connect to the db */

  function distance($lat1, $lon1, $lat2, $lon2, $unit) {

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

}
  
  
  
  mysql_query("SET NAMES 'utf8';");
 
  $query1 = "select * from story inner join user where user.id = story.user_id";
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
  }
  
  
  
  
  
  /* grab the posts from the db */
 //mysql_query("SET NAMES 'utf8';");
  //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
  $query = "select story.id, story.urlid, user.id as user_id, user.username, user.email, story.distance, story.viewed, story.liked, story.description, story.lat, story.lng, story.category, story.imgurl, user.imgname, story.venue from story inner join user where user.id = story.user_id and distance <15.00 order by added_time limit 8;";
  $result = mysql_query($query,$con) or die('Errant query:  '.$query);
    
    
	
	
//$query = "SELECT eventimg.imgid, event.id, left(event.title, 100) as title, event.category, event.timeinfo, event.starttime, event.endtime,  left(event.description, 60) as description, event.latitude, event.longtitude, event.id, event.route, event.timestring, event.view, event.ulike, event.dislike, event.distance FROM eventimg inner join event on event.eimgid = eventimg.eimgid and city = '".mysql_real_escape_string($city)."' and category like '%sports%' order by distance ASC limit 3;";	
	
	   
	
   // mysql_query("SET NAMES 'utf8';");
    //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
    $query2 = "select story.id, story.urlid, user.id as user_id, user.username, user.email, story.distance, story.viewed, story.liked, story.description, story.lat, story.lng, story.category, story.imgurl, user.imgname, story.venue from story inner join user where user.id = story.user_id and category like '%Freebies%' and distance <15.00 order by distance ASC;";
    $result2 = mysql_query($query2,$con) or die('Errant query:  '.$query2);

    
   // mysql_query("SET NAMES 'utf8';");
    //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
    $query3 = "select story.id, story.urlid, user.id as user_id, user.username, user.email, story.distance, story.viewed, story.liked, story.description, story.lat, story.lng, story.category, story.imgurl, user.imgname, story.venue from story inner join user where user.id = story.user_id and category like '%Bargains%' and distance <15.00 order by distance ASC;";
    $result3 = mysql_query($query3,$con) or die('Errant query:  '.$query3);

    
		
	
	
  
	
	
	
	
    
    
  // $num = mysql_num_rows($result);
  // for($j=0;$j<$num;++$j)
   //{
     //$row = mysql_fetch_assoc($result)
	// echo $row[0]."<br/>";
	 // echo $row[1]."<br/>";
	 
   //}
  /* create one master array of the records */
  $posts = array();
  $posts2 = array();
  $posts3 = array();
  



  
   //$res_array = array();
   // for ($count=0; $row = mysql_fetch_assoc($result); $count++) 
	// {
    //$res_array[$count] = $row;
//	}
	
  //array();
  if(mysql_num_rows($result)) {
    while($post = mysql_fetch_assoc($result)) {
      $posts[] = $post;
    }
  }
    
    if(mysql_num_rows($result2)) {
        while($post = mysql_fetch_assoc($result2)) {
            $posts2[] = $post;
        }
    }

    if(mysql_num_rows($result3)) {
        while($post = mysql_fetch_assoc($result3)) {
            $posts3[] = $post;
        }
    }

    


  /* output in necessary format */
  if($format == 'json') {
    header('Content-type: application/json');
    echo json_encode(array('posts'=>array(
                           "Bargains" => $posts3, "Freebies"=>$posts2/*, "Shopping"=>$posts3, "Social & Tours"=>$posts11, "Nightlife"=>$posts4, "Health & Beauty"=>$posts5, "Music" => $posts6, "Sports"=>$posts7, "Arts & Theatre"=>$posts8, "Kids Events"=>$posts9, "Others"=>$posts10*/)));//array('posts'=>$posts));//$res_array);
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