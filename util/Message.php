 <?php
 class Message
 {
 
    public static function sendMessage($email, $subject, $from, $txt)
	{
    
   //$txt = "Hello world!";
    $headers = "From: $from" . "\r\n" /*. "CC: somebodyelse@example.com"*/;

    mail($email,$subject,$txt,$headers);
	}
 
 }
 ?>