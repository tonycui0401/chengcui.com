 <?php
 class Auth
 {
 
    public static function handleLogin()
	{
	 @session_start();
	 $logged = $_SESSION['loggedin'];
	 if($logged == false)
	 {
	 Session::destroy();
	 header('location: ' . URL .'');
	  exit;
	 }
	}
 
 }
 ?>