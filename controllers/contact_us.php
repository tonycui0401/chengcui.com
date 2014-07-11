<?php
class Contact_us extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('contact_us/index', 0);  
	  }
	 
	  
	    
	   
	   
	
	
	 
}
?>