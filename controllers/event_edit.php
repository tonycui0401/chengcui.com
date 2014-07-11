<?php
class Event_edit extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	 Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		$this->view->eventsEdit = $this->model->getUserEvent();
		$this->view->render('event_edit/index', 0);  
		
	  }
	 
	  function edit($id)
	  {

		$this->view->editDetail = $this->model->getEventDetail($id);
		
		$this->view->render('event_edit/edit', 0);  
		
	  }
	 
	  
	   function edit_guest($id)
	  {

		$this->view->eventid = $id;
		$this->view->render('event_edit/edit_guest', 0);  
	  }
	 
	   function invitetolist()
	  {
	   $id = $_POST['id'];
	   $eventid = $_POST['eventid'];
	   $this->model->invitetoguest($id, $eventid);
	  }
	 
	   function saveEdit()
	  {
	   $title = $_POST['id'];
	   $date_from = $_POST['date_from'];
	   $date_to = $_POST['date_to'];
	   //$this->model->invitetoguest($id, $eventid);
	  }
	 
	    function add_guest($id)
	  {
        $this->view->event_id = $id;
		$this->view->guests = $this->model->getCurrentGuests();
		$this->view->render('event_edit/add_guest', 0);  
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
	  
	    
	   
	   
	
	
	 
}
?>