<?php
class Index extends Controller{
     function __construct(){
	 parent::__construct();
	 
	 //Auth::handleLogin();
	  //echo "we are in index";
	  $this->view->css = array("index/css/default.css");
	  $this->view->js = array("index/js/default.js");
	  
	 }
	 
	  function index(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/index', 0);
	  }
	  
	   function bargainer(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/bargainer', 0);
	  }
	  
	   function newsflare(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/newsflare', 0);
	  }
	  
	  
	   function visage(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/visage', 0);
	  }
	  
	  
	   function mindmover(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/mindmover', 0);
	  }
	  
	   function eventtzandroid(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/eventtzandroid', 0);
	  }
	  
	   function eventtzios(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/eventtzios', 0);
	  }
	  
	     function hunli(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/5hunli', 0);
	  }
	  
	   function emenu(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/emenu', 0);
	  }
	  
	   function turbopoker(){
    //var_dump($_COOKIE);
	
	/*if(Session::get('loggedin')==true)
	{
	header('location: ' . URL .'profile');
	}else{
	header('location: ' . URL .'');
	}*/
	 $this->view->render('event/turbopoker', 0);
	  }
	  
	 
	  
	  function events(){
	    $this->view->render('index/forgot', 0);
	  }
	  
	  
	 
	  /*function searchopt(){
	   //$this->view->query = $query;
	 $this->view->render('index/ajax_load', 1);
	  
	  }*/
	  
	  
	 function logout()
	  {
	 //  Session::set('loggedin', false);
	  Session::destroy();
	// setcookie ("search", "", time() - 3600, "/MindMover");
	 /* if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}*/
	/*$past = time() - 96000;
foreach ( $_COOKIE as $key => $value )
{
    setcookie( $key, $value, $past, '/' );
}*/
     
	  header('location:'.URL.'login');
	  exit;
	  }
	  
	  
	  function details(){
	    $this->view->render('index/index', 0);
	  
	  }
	
	 
}
?>