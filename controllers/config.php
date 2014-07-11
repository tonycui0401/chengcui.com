<?php
class Event extends Controller{
     function __construct(){
	 parent::__construct();
	 
	  $this->view->css = array("index/css/default.css");
	  $this->view->js = array("index/js/default.js");
	  
	 }
	 
	  function index(){
	 $this->view->render('about_app/index', 0);
	  }
	  
	  function category(){
	 $this->view->render('about_app/index', 0);
	  }
	  
	  
	 
	
	 
}
?>