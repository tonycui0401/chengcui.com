<?php
class Register extends Controller{
     function __construct(){
	 parent::__construct();
	
	 $this->view->css = array(strtolower(get_class($this))."/css/default.css");
	  
	  
	 }
	 
	  function index(){
	
	  $this->view->render('register/index');
	  }
	   /* function run()
	 {
	    $this->model->run();
	 }*/
	 
	 function register()
	 {
	 $this->view->error="";
	 $this->view->username = $_POST['username'];
	 $this->view->email = $_POST['email'];
	 $this->view->password = $_POST['password'];
	 try{
		  $this->form->post('username')
	  //->val('minlength', 6)
      ->val('checknull')
	  
      ->post('email')
	  ->val('emailValid')
	  ->val('checknull')
	  
	  ->post('password')
	  //->val('minlength', 8)
	  ->val('checknull');
	
       $this->error = $this->form->submit();
	   // var_dump($this->error);
	   if(empty($this->error))
	   {
	      $id = $this->model->create($_POST['username'], $_POST['email'], $_POST['password']);
		  $time = time();
		  $data = array(
		     "contact_name" => "",
			 "gender" => "",
			 "birthday" => "",
			 "about" => "",
		     "contact_number" => "",
			 "contact_email" => "",
			 "website" => "",
			 "user_id" => $id,
			 "imgname" => "",
			 "created_at" => $time,
			 "updated_at" => $time,
		  );
		  $this->model->createUserDetail($data);
		  $this->view->error="";
		  Session::init();
	 // Session::set('user_id', $values['id']);
	  Session::set('email', $_POST['email']);
	   Session::set('username',$_POST['username']);
	   Session::set('user_id', $id);
	  Session::set('loggedin', true);
		//$this->model->create($data);
		header('location: '.URL.'profile');
	   }else{
	     /*$str= '';
		 foreach($this->error as $key => $value)
		 {
		  $str .= $key . '=> ' . $value . "<br/>";
		 }*/
		 
		 $this->view->error = $this->error;
	     // throw new Exception($str);
		  
		  
	   }
	  
      }catch(Exception $e){
        echo $e->getMessage();
      }
	 
	  $this->view->render('register/index');
	 }
	 
}
?>