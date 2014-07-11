<?php
class About_us extends Controller{
   
     function __construct(){
	 parent::__construct();
	 	// Auth::handleLogin();
	
	  
	 }
	  
	  function index()
	  {

		
		$this->view->render('about_us/index', 0);  
	  }
	 
	  
	    
	   
	   
	
	
	 
}
?>