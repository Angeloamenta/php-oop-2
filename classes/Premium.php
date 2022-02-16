<?php 

require_once __DIR__ . '/User.php';

class Premium extends User
{
    protected $sconto = 30;

    public function __construct($name, $lastname)
  {
    parent::__construct($name, $lastname);
    
  }
}


?>