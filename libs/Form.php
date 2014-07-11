<?php
 require 'Form/Val.php';
 
 class Form
 {
    private $postdata = array();
	private $currentItem = null;
	private $val = array();
	private $error  = array();
    public function __construct(){
	  $this->val = new Val();
	}
	public function post($field){
	$this->postdata[$field] = $_POST[$field];
	$this->currentItem =  $field;
	//echo $this->currentItem;
	return $this;
	}
	public function fetch($fieldName = false)
	{
	if($fieldName)
	{
	   if(isset($this->postdata[$fieldName]))
	   return $this->postdata[$fieldName];
	   
	   else
	   return false;
	}else{
	   return $this->postdata;
	}
	}
	public function val($typeOfValidator, $arg=null){
	//$val = new Val();
	if($arg == null)
	$error = $this->val->{$typeOfValidator}($this->postdata[$this->currentItem]);
	else
	$error = $this->val->{$typeOfValidator}($this->postdata[$this->currentItem], $arg);
	
	if($error)
	  $this->error[$this->currentItem]=$error;
	 
    /* echo "-----------";
	 echo $this->currentItem;
	 echo "-----------";*/
	 
	/*echo '<pre>';
	print_r($this->error);*/
	 //print_r($this);
	return $this;//->error;
	}
	public function submit(){
	   /*if(empty($this->error))
	   {
	      return true;
	   }else{
	     $str= '';
		 foreach($this->error as $key => $value)
		 {
		  $str .= $key . '=> ' . $value . "<br/>";
		 }
	      throw new Exception($str);
	   }*/
	   
	   /*if(empty($this->error))
	   {
	      return true;
	   }else{*/
	      return $this->error; 
	   //}
	
	}
 }
 ?>