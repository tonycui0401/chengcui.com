<?php
class Privacy_policy extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('about_app/privacy_policy', 0);  
	  }
	 
	  
	    
	   
	   
	
	
	 
}
?>