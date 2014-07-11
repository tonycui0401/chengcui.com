  <?php
  class Val
  {
       public function __construct()
	   {
	   
	   }
	   public function minlength($data, $arg)
	   {
	          if(strlen($data) < $arg)
             {
			    return "Your string must aleast be $arg long";
			 }
	   }
	   public function checknull($data)
	   {
	          if(strlen($data) ==0)
			  {
			    return "You need to filling in this field";
			  }
	   
	   }
	   
	   public function emailValid($data)
	    {
	     //$Syntax='#^[w.-]+@[w.-]+.[a-zA-Z]{2,5}$#';
          if(filter_var($data, FILTER_VALIDATE_EMAIL))
		   {
            
		   }else{
		   return "Email is not in the right format";
		   }
           
	    }
	   
	   
	     public function maxlength($data, $arg)
	   {
	          if(strlen($data) > $arg)
             {
			    return "Your string can only be $arg long";
			 }
	   }
	    public function digit($data)
	   {
	          if(ctype_digit($data)==false)
             {
			    return "Your string must be a digit";
			 }
	   }
	   public function __call($name, $arguments)
	   {
	      throw new Exception("$name does not exist inside of: ".__CLASS__);
	   }
  }