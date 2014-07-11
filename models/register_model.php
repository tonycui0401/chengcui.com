<?php

class Register_model extends Model
{
   public function __construct()
   {
     parent::__construct();
   }
   /*public function userList()
   {
      return  $this->db->select("select id, login, role from users");
     /*$sth = $this->db->prepare("select id, login, role from users");
	 $sth->execute();
	 return $sth->fetchAll();*/
     /*$sth = $this->db->prepare("insert into data (text) values (:text)");
	  $sth->execute(array(":text"=>$text));*/
   //}
   /*public function productsList()
   {
      
      return $this->db->select('SELECT * FROM products WHERE userid = :userid', 
                array('userid' => $_SESSION['userid']));
   }
   public function productsEdit($id)
   {    
   	
       return $this->db->select('SELECT * FROM products WHERE userid = :userid AND id = :id', 
            array('userid' => $_SESSION['userid'], 'id' => $id));
			
      /*$result = $this->db->select("select id, login, role from users where id=:id", array(":id" => $id));
      return $result[0];*/
	  //$sth = $this->db->prepare("select id, login, role from users where id=:id");
	  /*$sth->execute(array(
	   ":id" => $id
	  ));
	  return $sth->fetch();*/
 //  }
   
   
    
  public function create($username, $email, $password)
   {
     $this->db->insert("user", array(
	  "username" => $username,
	  "myemail" => $email,
	  "password" => Hash::create('md5', $password, HASH_PASSWORD_KEY),
	  "created_at" => time(),
	 ));
      //$sth = $this->db->prepare("insert into users ('login', 'password', 'role') values ('".$data['login']."', '".$data['password']."', '".$data['role']."'");
	   /*$sth = $this->db->prepare("insert into users(login, password, role) values (:login, :password, :role)");
	  $sth -> execute(array(
	  ":login" => $data['login'],
	  ":password" => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
	  ":role" => $data['role']
	  ));*/
	  return $this->db->lastInsertId();
   }
   
   
   public function createUserDetail($data)
   {
     
      //$sth = $this->db->prepare("insert into users ('login', 'password', 'role') values ('".$data['login']."', '".$data['password']."', '".$data['role']."'");
	   /*$sth = $this->db->prepare("insert into users(login, password, role) values (:login, :password, :role)");
	  $sth -> execute(array(
	  ":login" => $data['login'],
	  ":password" => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
	  ":role" => $data['role']
	  ));*/
	  
	  
	 
		
		$this->db->insert("user_detail", array(
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
			 "updated_at" => $data['created_at'],
	 ));
		
	   /*$this->db->update('user_detail', $postData, 
                "user_id =".$data['user_id']);*/
	  
	  
   }
   
   
   
   
  /*public function editSave($data)
    {
	    if(empty($data['imgid'])){
		 $postData = array(
            'title' => $data['title'],
			'price' => $data['price'],
			'shipping' => $data['shipping'],
			'description' => $data['description'],
        );
		}else{
        $postData = array(
            'title' => $data['title'],
			'price' => $data['price'],
			'shipping' => $data['shipping'],
			'description' => $data['description'],
			'imgid' => $data['imgid'],
        );
        }
      $this->db->update('products', $postData, 
                "id =".$data['id']." AND userid = ".$_SESSION['userid']."");
			//print_r($postData			
				//echo "ddd";
    }
	
	public function delete($id)
    {
        $this->db->delete('products', "id =$id AND userid = ".$_SESSION['userid']."");
    }
   
   public function upload($image_name, $time)
   {
   
      $this->db->insert("product_image_upload", array(
	  "imgid" => $image_name,
	  "imgtime" => $time,
	  "userid" => $_SESSION['userid']
	 ));
  
   }
   public function getImage()
   {
       return $this->db->select('SELECT * FROM product_image_upload WHERE userid = :userid order by imgtime DESC LIMIT 1', 
                array('userid' => $_SESSION['userid']));
   }
  /* public function editSave($data)
   {
     $postData = array(
	   "login" => $data['login'],
	  "password" => Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
	  "role" => $data['role']
	 );
     $this->db->update("users", $postData, "id=".$data['id']."");
   }*/
  
/*  public function delete($id)
   {
   
   
   
     $result = $this->db->select('select role from users where id = :id',array(':id' => $id));
	  if($result[0]['role']=='owner')
	  return false;
	  $sth = $this->db->delete("products", "id='$id'");
   }*/
  
}





/*class Login_model extends Model
{
   public function __construct()
   {
     parent::__construct();
   }
   public function run()
   {
  
    $UserHash = new Hash();
	
     $sth = $this->db->prepare("SELECT * FROM user where email=:email");
	 $sth->execute(array(
	 ":email" => $_POST['email'],
	 ));
	
	$user = $this->db->select('SELECT * FROM user where email=:email', array(":email" => $_POST['email']));
	
	 $count = $sth->rowCount();
	
	if($count>0)
	 {
	 
	 foreach($user as $key => $values)
	{
	 
	 if($UserHash->CheckPassword($_POST['password'], $values['password']))
	 {
	 echo "login successful";
	 if(isset($_POST['remember']))
	 {
	 $rememberMe = strip_tags($_POST['remember']);
	 if ($rememberMe == "remember") {
            setcookie("loggedIn", "yes", time()+3600);
             }
	  }
	  Session::init();
	  Session::set('user_id', $values['id']);
	  Session::set('email', $values['email']);
	  Session::set('loggedin', true);
	  
	  header('location: ' . URL .'');
	 }else{

	  header('location: ' . URL .'login');
	 }
	
	}
	 
	 }else{
	 
	 header('location: ' . URL .'login');
	 
	 }
	
	
	}
      
}*/
?>