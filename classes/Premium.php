<?php 

require_once __DIR__ . '/User.php';

class Premium extends User
{
    protected $sconto = 30;

    public function __construct($name, $lastname)
  {
    parent::__construct($name, $lastname);
    
  }

    /**
     * Get the value of sconto
     */ 
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set the value of sconto
     *
     * @return  self
     */ 
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }
}


?>