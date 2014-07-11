<?php

     include 'rnfunctions.php';
        $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 is the default
        $format = strtolower($_GET['format']) == 'json' ? 'json' : 'xml'; //xml is the default
        $email = $_GET['email']; //no default
       
      //  $id = $_GET['id'];
        
        /* connect to the db */
      
        //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
        $query = "SELECT * from user where email = '$email';";
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
