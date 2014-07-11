<?php
class Event_attend extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	 Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('event_attend/index', 0);  
	  }
	 
	   function view()
	  {

		
		$this->view->render('event_attend/view', 0);  
	  }
	  
	  
	   function timeline()
	  {

		
		$this->view->render('event_attend/timeline', 0);  
	  }
	  
	   function guestlist()
	  {

		
		$this->view->render('event_attend/event_guest', 0);  
	  }
	    
	   
	   
	
	
	 
}
?>