<?php
class Guest extends Controller{
     function __construct(){
	 parent::__construct();
	 
	 Auth::handleLogin();
	  //echo "we are in index";
	  $this->view->css = array("guest/css/default.css");
	  $this->view->js = array("guest/js/default.js");
	  
	 }
	 
	  function index(){
    //var_dump($_COOKIE);
	//header('location: ' . URL .'login');
	$this->view->render('guest/index', 0);
	  }
	  
	   function addtolist()
	   {
	   $id = $_POST['id'];
	   $this->model->addtoguest($id);
	   }
	  
	  function add(){
    //var_dump($_COOKIE);
	//header('location: ' . URL .'login');
	$this->view->result = "";
	$this->view->render('guest/new', 0);
	  }
	  
	  function addGuest()
	  {
	  $email = $_POST['email'];
	  $this->view->email = $email;
	 $result = $this->model->searchUser($email);
	 /*if($result==0)
	 {
	  $this->view->result = 0;
	 }else{*/
	 $this->view->result = $result;
	 
	// }
	 
	  $this->view->render('guest/new', 0);
	  
	  }
	  /*function forgot(){
	    $this->view->render('/forgot', 0);
	  }*/
	  
	  
	 
	  /*function searchopt(){
	   //$this->view->query = $query;
	 $this->view->render('index/ajax_load', 1);
	  
	  }*/
	  
	  
	 function logout()
	  {
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