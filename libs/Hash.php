<?php
 class hash
   {
     //Hash::create('md5','passwordhere','saltIfThereIsOne');
	  /**
	  *
	  *
	  *
	  *
	  */
      public  function create($algo, $data)
	  {
	     $context = hash_init($algo, HASH_HMAC, HASH_PASSWORD_KEY);
		 hash_update($context, $data);
		 return hash_final($context);
	  }
   }
?>