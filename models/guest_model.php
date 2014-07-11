<?php
class Guest_model extends Model
{
   public function __construct()
   {
     parent::__construct();
   }
   public function searchUser($email)
   {
   /* $sth = $this->db->prepare("SELECT * FROM user where myemail=:email");
	 
	 $sth->execute(array(
	 ":email" => $_POST['email'],
	 //":password" => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY),
	 ));
	
	 $count = $sth->rowCount();
	 if($count>0)
	 {*/
      return $this->db->select('SELECT * FROM user WHERE myemail = :email', 
                array('email' => $email));
	 /*}else{
	  return 0;
	 }*/
   }
   
   public function addtoguest($id)
   {
   $time = time();
    $this->db->insert("guests", array(
	   "userid" => Session::get('user_id'),
	  "recip" => $id,
	  "added_at" => $time,
	 ));
   }
   
   
   
}
?>