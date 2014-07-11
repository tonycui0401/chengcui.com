<?php
class Story extends Controller{
     function __construct(){
	 parent::__construct();
	 
	  $this->view->css = array("index/css/default.css");
	  $this->view->js = array("index/js/default.js");
	  
	 }
	 
	  function index(){
	 
	  }
	  
	  function detail($id){
    
	
	//$this->view->event=$this->model->getUserEvent($id);
	$con = mysql_connect('localhost','qqelnpml_cheng','a135797S') or die('Cannot connect to the DB');
mysql_select_db('qqelnpml_pixstorie',$con);
  
  
  /* grab the posts from the db */
 mysql_query("SET NAMES 'utf8';");
  //$query = "SELECT post_title, guid FROM wp_posts WHERE post_author = $user_id AND post_status = 'publish' ORDER BY ID DESC LIMIT $number_of_posts";
  $query = "SELECT * from story where urlid =".$id;
  $result = mysql_query($query,$con) or die('Errant query:  '.$query);
  $post = mysql_fetch_assoc($result);
	$this->view->event = $post;
	$this->view->render('event/index', 1);
	  }
	  
	  
	 
	
	 
}
?>