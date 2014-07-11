<?php
class Create extends Controller{
   
      private $latitude;
      private $longtitude;
   
     function __construct(){
	 parent::__construct();
	 	 Auth::handleLogin();
	  $this->view->css = array(strtolower(get_class($this))."/css/default.css");
	  $this->view->js = array(strtolower(get_class($this))."/js/default.js");
	  
	 }
	  
	  function index()
	  {
    
		/*$query = $_POST['search'];
		
		
		if(isset($_POST['normalsearch']))
		{
		     $_SESSION['query'] = $query;
		}
		
		
		
		$this->view->query =  $query;
		date_default_timezone_set('Europe/London');
		$user_track_id = $this->model->createUserTrack();
		//$this->model->getUserTrackId();
		$this->model->createInstance($user_track_id);
		$this->model->insertPointsHistory();
		$instanceId = $this->model->getInstanceId($user_track_id);
		$this->model->insertResponseDateText();
		$this->model->insertDateResponses($instanceId);
		$this->model->insertResponseQueryText($query);
		$this->model->insertQueryResponses($instanceId);
		*/
		
		
		$this->view->render('create/index', 0);  
	  }
	 
	  function addEvent()
	  {
	  
	  }
	  
	  
	  
	    function step2($latitude, $longtitude, $postalcode)
	  {
	   
	   $this->latitude = $latitude;
	   $this->longtitude = $longtitude;
	   $this->view->lati = $this->latitude;
	   $this->view->long = $this->longtitude;
	   $this->view->postal = $postalcode;
        $url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longtitude&sensor=true";

$json_result = json_decode(file_get_contents($url));



        $geo_result =  $json_result->results[0];
		 //$geo_result1 =  $json_result->results[1];
//$coordinates = $geo_result->geometry->location;
$formatted_address = $geo_result->formatted_address;

$this->view->address = $formatted_address;
//$geo_result = $jsondata[0]->results[0];
//$coordinates = $geo_result->geometry->location;

       
	  
	  $this->view->render('create/step2', 0);  
	  
	  }
	  
	  
	  
	  
	  function ajax_upload()
	{
	
	 $mainfolder = "files/users/";
 $userid = Session::get('user_id');
if(!file_exists($mainfolder.$userid."/events")){
    mkdir($mainfolder.$userid."/events");
}
$upload_dir = $mainfolder.$userid."/events/";
	    if (isset($_FILES['picture']))  // file was send from browser
      {
	 
	  $time = time();
      $b = uniqid();
	  $smallimgfile = $upload_dir."small_".$b.".jpg";
	  $largeimgfile = $upload_dir."large_".$b.".jpg";
	  $cropimgfile = $upload_dir."crop_".$b.".jpg";
	    $this->model->upload($b, $time);
	 Image::normalImg($_FILES['picture'], 180, $smallimgfile, 180, 120, $cropimgfile, $largeimgfile, 500);
	  //Image::normalImg($_FILES['picture'], 500, $largeimgfile);
	//  Image::CropImg($_FILES['picture'], 30,  $cropimgfile);
	  
	  }
	   $filename =  URL.$upload_dir."small_".$b.".jpg";
	   echo '<script language="JavaScript" type="text/javascript">'."\n";
      echo 'var parDoc = window.parent.document;';
	  echo "parDoc.getElementById('image_upload').innerHTML = '<img src=\'$filename\'id=\'preview_picture_tag\' name=\'preview_picture_tag\' />';";
	  echo "\n".'</script>';
     
	  
	}
	  
	  
	  
	  
	  
	  
	  
	  function new_guest()
	  {
	  
	  $this->view->render('create/new_guest', 0);  
	  
	  }
	   
	 function save()
	  {
	   $image_name = $this->model->getImage();
	    $title = $_POST['title'];
		$date_from = $_POST['date_from'];
		$hour1 = $_POST['hour1'];
		$minute1 = $_POST['minute1'];
		$date_to = $_POST['date_to'];
		$hour2 = $_POST['hour2'];
		$minute2 = $_POST['minute2'];
		$latitude = $_POST['lati'];
		$longtitude = $_POST['long'];
		$address = $_POST['address'];
		$postal = $_POST['postal'];
		$description = $_POST['description'];
	   $time = time();
	   $starttime = $hour1.":".$minute1." ".$date_from;
	   $endtime = $hour2.":".$minute2." ".$date_to;
	 
		 $data = array(
		     "title" => $title,
			 "starttime" => $starttime,
			 "endtime" =>  $endtime,
			 "latitude" =>$latitude,
		     "longtitude" => $longtitude,
			 "description" => $description,
			 "address" => $address,
			 "postal" => $postal,
			 "user_id" => Session::get('user_id'),
			 "imgname" => $image_name[0]['imgname'],
			 "created_at" => $time,
		  );
		 
       //$this->view->data = $data;
		 
		$id = $this->model->create($data);
		//$id = $this->db->lastInsertId();
		//header('location: '.URL.'event_coming');
	 // $this->view->render('create/results', 0);  
	   header('location: ' . URL .'create/results/'.$id);
	  }  
	  
	  function results($id)
	  {
	    
		
		$this->view->render('create/results', 0);  
		
	  }
	  
	
	
	 
}
?>