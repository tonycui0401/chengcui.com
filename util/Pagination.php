<?php
 class Pagination
 {
    public $firstPage;
	public $lastPage;
	public $prevPage;
	public $nextPage;
	public $pageNum;
	
    public function __construct($totalItem, $itemperpage, $pageNum)
	{
	 $this->lastPage = ceil($totalItem/$itemperpage);
	 if ($pageNum > $this->lastPage) 
        { 
         $this->pageNum = $this->lastPage;
        }else if($pageNum < 1)
        {
         $this->pageNum = 1; 
        }
	  if($pageNum > 1){
                     $this->prevPage = $pageNum-1;
					 }else{
					 $this->prevPage = 1;
					 }
	if($pageNum < $this->lastPage){
                      $this->nextPage = $pageNum+1;
		}else{
		 $this->nextPage = $this->lastPage;
		}	
	}
   
	 
	  public function getFirst() {
        return $this->firstPage;
    }
	
	public function getPrev() {
          return $this->prevPage;
    }
	
	public function getNext() {
          return $this->nextPage;
    }
	
	public function getLast() {
        return $this->lastPage;
    }
	
	public function getPageNum() {
	    return $this->pageNum;
	}
   
	
}

?>