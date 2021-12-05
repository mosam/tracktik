<?php

abstract class Electronic
{
        public $price;
        public $wired;
        
	abstract public function maxExtras();
        
            public function getPrice()
            {
                    return $this->price;
            }

            public function getType()
            {
                    return $this->type;
            }

            public function getWired()
            {
                    return $this->wired;
            }

            public function setPrice($price)
            {
                    $this->price = $price;
            }

            public function setType($type)
            {
                    $this->type = $type;
            }

            public function setWired($wired)
            {
                    $this->wired = $wired;
            }
}