<?php 
/**
 * This class is used for electronic Microwave item.
 */ 
include_once('app/Controllers/ElectronicItem.php');
include_once('app/Controllers/Electronic.php');

class Microwave extends Electronic
{ 
			/**
			*	@var number
			*/
	   private $max = 0;
  
		   /**
			*	@var array
			*/
	   public $product = [] ; 
  
		 /**
			* Constructor
			* @param price which is price of the microwave  
			* @param type which is price of the electrinic item 
			* @param wired which is define whether electronic item is wired or not.   
			* @author Mosam Prajapati <mosamprajapati147gmail.com>
		   */ 
	  function __construct($price,$type,$wired) {
    
			 $electronicItem = new ElectronicItem();
			 $electronicItem->setPrice($price); 
			 $electronicItem->setType($type); 
			 $electronicItem->setWired($wired); 

			$this->product['price'] = $electronicItem->getPrice() ;
			$this->product['type'] = $electronicItem->getType();
			$this->product['wired'] = $electronicItem->getWired();
	  }

	  /**
	 * max extras function which return number. it is implementation of the adstract method.
	 * @author Mosam Prajapati <mosamprajapati147gmail.com>
	 * @return maximum number of extras an electronic item can have
	 */ 
		public function maxExtras()
		{
			return $this->max; 
		}

	 /**
	 * max extras function which return number. it is implementation of the adstract method.
	 * @author Mosam Prajapati <mosamprajapati147gmail.com>
	 * @return product with its attributes
	 */
		function getProduct(){
		   return   $this->product;
		}
}

?>