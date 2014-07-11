<?php
class Profile extends Controller{
   
     function __construct(){
	 parent::__construct();
	  Auth::handleLogin();
	
	    $this->view->css = array(strtolower(get_class($this))."/css/default.css");
	  $this->view->js = array(strtolower(get_class($this))."/js/default.js");
	 }
	  
	  function index()
	  {
   // var_dump($_SESSION);
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
		
		
		$this->view->render('profile/index', 0);  
	  }
	 
	   function edit($id)
	  {
      $this->view->user_detail =  $this->model->getUserDetail($id);
		$this->view->render('profile/edit', 0);  
	  }
	 
	    function view()
	  {
  
		$this->view->render('profile/view', 0);  
	  }
	   
	     function account($id)
	  {
      $this->view->user_account =  $this->model->getUserAccount($id);
		$this->view->render('profile/account', 0);  
	  }
	   
	   
	   function editAccount($id)
	   {
	     $username = $_POST['username'];
	     $old_password = $_POST['old_password'];
		 $new_password = $_POST['new_password'];
		 $email = $_POST['email'];
		  $data = array(
		     "username" => $username,
			 "oldpass" => $old_password,
			 "newpass" => $new_password,
			 "email" =>  $email,
		  );
		  $this->model->editAccount($data, $id);
		  header('location: '.URL.'profile');
	   }
	   
	   
	   
	   function editUserData()
	   {
	  $image_name = $this->model->getImage();
	    //$email = $_SESSION['email'];
        $day = $_POST['day'];
      	$month = $_POST['month'];
        $year = $_POST['year'];
		$birthday = $day."/".$month."/".$year;
		$gender = $_POST['gender'];
		$contact_name = $_POST['contact_name'];
		$about = $_POST['about'];
		$contact_number = $_POST['contact_number'];
		$website = $_POST['website'];
		$contact_email = $_POST['contact_email'];
		$time = time();
		 $data = array(
		     "contact_name" => $contact_name,
			 "gender" => $gender,
			 "birthday" => $birthday,
			 "about" => $about,
		     "contact_number" => $contact_number,
			 "contact_email" => $contact_email,
			 "website" => $website,
			 "user_id" => Session::get('user_id'),
			 "imgname" => $image_name[0]['imgname'],
			 "updated_at" => $time,
		  );
		$this->model->edit($data);
		header('location: '.URL.'profile/view');
	   }
	   
	   
	  function ajax_upload_edit()
	{
	
	 $mainfolder = "files/users/";
 $userid = Session::get('user_id');
if(!file_exists($mainfolder.$userid."/profile")){
    mkdir($mainfolder.$userid."/profile");
}
$upload_dir = $mainfolder.$userid."/profile/";
	    if (isset($_FILES['picture']))  // file was send from browser
      {
	 
	  $time = time();
      $b = uniqid();
	  $smallimgfile = $upload_dir."small_".$b.".jpg";
	  $largeimgfile = $upload_dir."large_".$b.".jpg";
	  $cropimgfile = $upload_dir."crop_".$b.".jpg";
	    $this->model->upload($b, $time);
	 Image::normalImg($_FILES['picture'], 180, $smallimgfile, 25, 25, $cropimgfile, $largeimgfile, 500);
	  //Image::normalImg($_FILES['picture'], 500, $largeimgfile);
	//  Image::CropImg($_FILES['picture'], 30,  $cropimgfile);
	  
	  }
	   $filename =  URL.$upload_dir."small_".$b.".jpg";
	   echo '<script language="JavaScript" type="text/javascript">'."\n";
      echo 'var parDoc = window.parent.document;';
	  echo "parDoc.getElementById('image_upload_edit').innerHTML = '<img src=\'$filename\'id=\'preview_picture_tag\' name=\'preview_picture_tag\' />';";
	  echo "\n".'</script>';
     
	  
	}
	   
	
	
	 
}
?>