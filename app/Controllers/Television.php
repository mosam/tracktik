<?php 
/**
 * This class is used for electronic television item.
 */ 
include_once('app/Controllers/ElectronicItem.php');
include_once('app/Controllers/Electronic.php');

class Television extends Electronic
{
		/**
		*	@var boolean
		*/
	  private $max = false;
  
	  /**
		*	@var array
		*/
	  public $product = [] ; 

	   /**
		* Constructor
		* @param price which is price of the television  
		* @param type which is price of the electrinic item 
		* @param wired which is define whether electronic item is wired or not.   
		* @param extras which is define extras item attached to the item.   
		* @author Mosam Prajapati <mosamprajapati147gmail.com>
	   */ 
	  function __construct($price,$type,$wired,$extras) {
			 $electronicItem = new ElectronicItem();
			 $electronicItem->setPrice($price); 
			 $electronicItem->setType($type); 
			 $electronicItem->setWired($wired); 

		$this->product['price'] = $electronicItem->getPrice() ;
		$this->product['type'] = $electronicItem->getType();
		$this->product['wired'] = $electronicItem->getWired();
		$this->product['extras'] = $extras;
	  }
  
	   /**
	 * max extras function which return number. it is implementation of the adstract method.
	 * @author Mosam Prajapati <mosamprajapati147gmail.com>
	 * @return product with its attributes
	 */

		function getProduct(){
		   return   $this->product;
	   }

	    /**
	 * max extras function which return number. it is implementation of the adstract method.
	 * @author Mosam Prajapati <mosamprajapati147gmail.com>
	 * @return product with its attributes
	 */
		public function maxExtras() {
			return $this->max; 

		}
}

?>