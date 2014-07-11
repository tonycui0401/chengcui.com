<?php
class Terms_conditions extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('about_app/terms_conditions', 0);  
	  }
	 
	  
	    
	   
	   
	
	
	 
}
?>