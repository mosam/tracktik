<?php

/**
 * This class is used for apply some methods on the Product's of cart.
 */ 

class ElectronicItems
{
        /**
		*	@var array
		*/
		private $items = array();

		public function __construct(array $items)
		{
			$this->items = $items;   

		}

		/**
		*	Returns the items depending on the sorting type requested
		*	@return array
		*/

		public function getSortedItems()
		{ 
			$items = $sorted = array();
			foreach ($this->items as $item)
			{
				$items[($item['price'] * 100)] = $item;
			}

			ksort($items, SORT_NUMERIC);

			foreach($items as $x=>$x_value)
			{
			    array_push($sorted,$x_value);
			}
			 return $sorted;
		}


		/**
		*	Returns the items total of items
		*	@return total price of cart items
		*/

		public function getPriceTotal()
		{ 
		    return	array_sum(array_column($this->items,'price'));
		}

		/**
		*	@param string $type
		*	@return array
		*/

		public function getItemsByType($type)
		{

                    if (in_array($type, ElectronicItem::$types))
                    { 
                    $callback = function($item) use ($type)
                    {
                    return $item['type'] == $type;
                    };

                    return array_filter($this->items,  $callback);
                    }
                    return false;
		}

}
