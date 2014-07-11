 <?php
include 'rnfunctions.php';
 
  $category = $_POST['category'];
// $username = $_GET['username'];
 $venue = $_POST['venue'];
 $description = $_POST['description'];
 $email = $_POST['email'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  $city = $_POST['city'];
  $country = $_POST['country'];
  $address = $_POST['address'];
  $postcode = $_POST['postcode'];

 $imgid = uniqid();
 
   $result=mysql_query("select id from user where email = '$email'");
        $row = mysql_fetch_array($result);
        $user_id=$row['id'];
 
 
 if(is_dir($file))
  {
 $new_image_name =  $email."/".$imgid.".jpg";
$defaulturl = "http://www.bargainerapp.com/api/stories/".$email."/".$imgid.".jpg"; 
  }
else
  {
  
   mkdir("stories/".$email);
   $new_image_name =  "stories/".$email."/".$imgid.".jpg";
$defaulturl = "http://www.bargainerapp.com/api/stories/".$email."/".$imgid.".jpg";
  }
 

 
 $result3=mysql_query("select max(id) as mid from story");
        $row = mysql_fetch_array($result3);
        $mid=$row['mid'];
        $newmid = $mid +1;
 
 $time = time();
    
 $rand = rand();
    
mysql_query("insert into story values($newmid, '$category', '$venue', '$description', 0, 0, 0, '$lat', '$lng', '$defaulturl', 0.00, '$time', '$time', '$address', '$city', '$country', '$postcode', $rand, $user_id)");
 
$msg = " ".var_dump($_FILES)." ";
//$new_image_name = "newfile.jpg";
move_uploaded_file($_FILES["userfile"]["tmp_name"], $new_image_name);


 ?>