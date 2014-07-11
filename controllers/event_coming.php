<?php
class Event_coming extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		//$this->view->events = $this->model->getEvents();
		$this->view->render('event_coming/index', 0);  
		
	  }
	 
	    function view($id)
	  {

		$this->view->eventDetail = $this->model->getEventDetail($id);
		$this->view->render('event_coming/view', 0);  
		
	  }
	  
	  
	   function timeline()
	  {

		
		$this->view->render('event_coming/timeline', 0);  
	  }
	  
	  function guestlist()
	  {

		
		$this->view->render('event_coming/event_guest', 0);  
	  }
	    
	   
	   
	
	
	 
}
?>