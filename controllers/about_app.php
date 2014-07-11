<?php
class About_app extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('about_app/index', 0);  
	  }
	 
	  
	    
	   
	   
	
	
	 
}
?>