<?php
class Database extends PDO
{
     public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
	 {
	  parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	  
	  //parent::setAtrribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);
	 }
     public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
	 {
	 $sth = $this->query("SET NAMES 'utf8';");
	  $sth = $this->prepare($sql);
	  foreach ($array as $key => $value)
	  {
	       $sth->bindValue("$key", $value); 
	  }
	  $sth->execute();
	  return $sth->fetchAll($fetchMode);
	 }
	 public function insert($table, $data)
	 {
	   ksort($data);
	  // print_r($data);
	  $fieldNames = implode(',', array_keys($data));
	  $fieldValues = ':'.implode(', :', array_keys($data));
	  $sth = $this->prepare("insert into $table ($fieldNames) values ($fieldValues)");
	  
	  foreach ($data as $key => $value){
	   $sth->bindValue(":$key",$value);
	  }
	  
	  $sth->execute();
	  
	
	 }
	 public function update($table, $data, $where)
	 {
	      ksort($data);
		  $fieldDetails = NULL;
	  foreach($data as $key => $value)
	  {
	      $fieldDetails.= "$key=:$key, ";
		  
	  }
	  $fieldDetails = rtrim($fieldDetails, ", ");
	  $sth = $this->prepare("update $table set $fieldDetails where $where");
	  
	  foreach ($data as $key => $value){
	   $sth->bindValue(":$key",$value);
	  }
	  
	  $sth->execute();
	 }
	 
	 public function delete($table, $where, $limit = 1)
	 {
	  return  $this->exec("delete from $table where $where limit $limit");
	   
	 }
}
?>