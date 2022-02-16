<?php 

class Product
{
    protected $name;
    protected $price;
    protected $availability;

    public function __construct($name, $price)
    {
      $this->name = $name;
      $this->price = $price;
      
    }
  
 
}



?>