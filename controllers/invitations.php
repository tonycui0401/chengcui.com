<?php
class Invitations extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	 Auth::handleLogin();
	
	  
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
		
		
		$this->view->render('invitations/index', 0);  
	  }
	 
	  
	     function view()
	  {

		
		$this->view->render('invitations/view', 0);  
	  }
	  
	  
	   /*function timeline()
	  {

		
		$this->view->render('event_attend/timeline', 0);  
	  }*/
	  
	   function guestlist()
	  {

		
		$this->view->render('invitations/event_guest', 0);  
	  }
	    
	   
	   
	
	
	 
}
?>