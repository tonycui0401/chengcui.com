<?php
class Login_Model extends Model{
      function __construct(){
	  parent::__construct();
	  }
	  
	  
	   public function run()
   {
  
    //$UserHash = new Hash();
	
     $sth = $this->db->prepare("SELECT * FROM user where myemail=:email and password=:password");
	 
	 $sth->execute(array(
	 ":email" => $_POST['email'],
	 ":password" => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
	 ));
	
	//$user = $this->db->select('SELECT * FROM user where email=:email', array(":email" => $_POST['email']));
	
	 $count = $sth->rowCount();
	
	if($count>0)
	 {
	 $user = $this->db->select('SELECT * FROM user where myemail=:email', array(":email" => $_POST['email']));
	 foreach($user as $key => $values)
	{
	  Session::init();
	 // Session::set('user_id', $values['id']);
	  Session::set('email', $values['myemail']);
	   Session::set('username', $values['username']);
	   Session::set('user_id', $values['id']);
	  Session::set('loggedin', true);
	}  
	  header('location: ' . URL .'profile');
	
	}else{
	 
	 header('location: ' . URL .'login');
	 
	  // Session::set('loggedin', false);
	  //return false;
	
	}
   }
	  /*function createUserTrack(){
	  
	  $this->db->insert("user_track", array(
	   "user_id" => $_SESSION['user_id'],
	  "wave_id" => "577",
	  "sent" =>0,
	  "opened" => "null",
	  "received" => "null",
	  "bounced" => "null",
	  "updated" => date("Y-m-d H:i:s"),
	  "created" => date("Y-m-d H:i:s"),
	 ));
	 
	 return $this->db->lastInsertId();
	  
	  }
	  
	  
	  function getUserTrackId()
	  {
	  
	  $sth = $this->db->prepare("select id, role from users where login =:login and password = :password");
	 //$sth->execute();
	 $sth->execute(array(
	 ':login'=>$_POST['login'],
	 ':password'=>Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
	 ));
	  
	  
	  
	  
	 $user =  $this->db->select('SELECT * FROM user_track WHERE user_id = :user_id order by id DESC limit 1', 
            array('user_id' => $_SESSION['user_id']));
	  return $user[0]['id'];
	  
	  }
	  
	  
	  
	  
	  
	  function createInstance($track_id){
	
	  $this->db->insert("instance", array(
	  "user_track_id" => $track_id,
	  "completed" => date("Y-m-d H:i:s"),
	  "rejected" =>"null",
	  "routed_out" => "null",
	  "quota_set" => "null",
	  "instance_num" => 1,
	  "updated" => date("Y-m-d H:i:s"),
	  "created" => date("Y-m-d H:i:s"),
	 ));
	
	  }
	  
	  
	  function insertResponseDateText()
	  {
	  
	  $date_array = getdate();
	  $formatted = sprintf("%04d%02d%02d000000", $date_array['year'], $date_array['mon'], $date_array['mday']);
	  $this->db->insert("response_text", array(
	  "free_text" => $formatted,
	  "updated" => date("Y-m-d H:i:s"),
	  "created" => date("Y-m-d H:i:s"),
	 ));
	 
	  }
	  
	   function insertResponseQueryText($query)
	  {
	   $this->db->insert("response_text", array(
	  "free_text" => $query,
	  "updated" => date("Y-m-d H:i:s"),
	  "created" => date("Y-m-d H:i:s"),
	 ));
	  
	  }
	  
	  function insertPointsHistory()
	  {
	   $this->db->insert("points_history", array(
	  "date" => date("Y-m-d H:i:s"),
	  "user_id" => $_SESSION['user_id'],
	  "wave_id" => 577,
	  "admin_user_id" => 0,
	  "value" => 120,
	  "description" => "Points for questionnaire",
	  "updated" => date("Y-m-d H:i:s"),
	  "created" => date("Y-m-d H:i:s"),
	 ));
	  
	  }
	  
	  function getInstanceId($user_track_id)
	  {
	  $user =  $this->db->select('SELECT * FROM instance WHERE user_track_id = :user_track_id order by id DESC limit 1', 
            array('user_track_id' => $user_track_id));
	  return $user[0]['id'];
	  }
	  
	  function getDateId()
	  {
	  $user =  $this->db->select('SELECT * FROM response_text WHERE user_track_id = :user_track_id order by id DESC limit 1', 
            array('user_track_id' => $user_track_id));
	  return $user[0]['id'];
	  }
	  
	  
	  function insertDateResponses($instanceId)
	  {
	  
	  $user =  $this->db->select('SELECT * FROM response_text order by id DESC limit 1');
			
	   $this->db->insert("responses", array(
	  "module_question_id" => 3767,
	  "questionnaire_id" => 357,
	  "user_id" => $_SESSION['user_id'],
	  "answer" => $user[0]['id'],
	  "instance_id" => $instanceId,
	  "created" => date("Y-m-d H:i:s"),
	 ));
	 
	 
	  }
	  
	  function insertQueryResponses($instanceId)
	  {
	  $user =  $this->db->select('SELECT * FROM response_text order by id DESC limit 1');
			
	   $this->db->insert("responses", array(
	  "module_question_id" => 3768,
	  "questionnaire_id" => 357,
	  "user_id" => $_SESSION['user_id'],
	  "answer" => $user[0]['id'],
	  "instance_id" => $instanceId,
	  "created" => date("Y-m-d H:i:s"),
	 ));
	  }*/
	  
}
?>