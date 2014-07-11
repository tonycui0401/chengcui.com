<?php
class Event_coming_model extends Model
{
   public function __construct()
   {
     parent::__construct();
   }
   public function getEvents()
   {
      
      return $this->db->select('SELECT * FROM events WHERE user_id = :userid', 
                array('userid' => Session::get('user_id')));
   }
   
    
	
	public function getEventDetail($id)
   {
      
      return $this->db->select('SELECT * FROM events WHERE user_id = :userid and id = :id', 
                array('id' => $id, 'userid' => Session::get('user_id')));
				
   }
   
	
	
	
	
	public function getUserAccount($id)
   {
      
      return $this->db->select('SELECT * FROM user WHERE id = :id', 
                array('id' => $id));
   }
   
     public function getImage()
   {
       return $this->db->select('SELECT * FROM profile_image_upload WHERE userid = :userid order by upload_at DESC LIMIT 1', 
                array('userid' => Session::get('user_id')));
   }
   
   public function editAccount($data, $id)
   {
        
   $pass = $this->db->select('SELECT * FROM user WHERE id = :id', 
                array('id' => Session::get('user_id')));
		$oldpass = Hash::create('md5', $data['oldpass'], HASH_PASSWORD_KEY);
		if($pass[0]['password']==$oldpass)
		{
		 $postData = array(
	         "username" => $data['username'],
			 "password" =>  Hash::create('md5', $data['newpass'], HASH_PASSWORD_KEY), 
			 "myemail" =>$data['email'],
			 );
	   $this->db->update('user', $postData, 
                "id =".$id);
				
		}
		

		
		
   
   
 
			
   
   }
   
   
   public function edit($data)
   {
     /*$this->db->update("user_detail", array(
	         "contact_name" => $data['contact_name'],
			 "gender" => $data['gender'],
			 "birth" => $data['birthday'],
			 "about" =>$data['about'],
		     "tel" => $data['contact_number'],
			 "email" =>$data['contact_email'],
			 "website" => $data['website'],
			 "user_id" => $data['user_id'],
			 "imgname" => $data['imgname'],
			 "created_at" => $data['created_at'],
	 ));*/
	   $postData = array(
	         "contact_name" => $data['contact_name'],
			 "gender" => $data['gender'],
			 "birth" => $data['birthday'],
			 "about" =>$data['about'],
		     "tel" => $data['contact_number'],
			 "email" =>$data['contact_email'],
			 "website" => $data['website'],
			 "user_id" => $data['user_id'],
			 "imgname" => $data['imgname'],
			 "created_at" => $data['created_at'],
        );
		
	   $this->db->update('user_detail', $postData, 
                "user_id =".$data['user_id']);
   }
    public function upload($image_name, $time)
   {
   
      $this->db->insert("profile_image_upload", array(
	   "userid" => Session::get('user_id'),
	  "imgname" => $image_name,
	  "upload_at" => $time,
	 ));
  
   }
   
   
}
?>