<?php 

class User
{
    protected $name;
    protected $lastname;
    protected $sconto = 10;

    public function __construct($name, $lastname)
    {
      $this->name = $name;
      $this->lastname = $lastname;
      
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
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