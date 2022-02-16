<?php 
require_once __DIR__ . '/CreditCard.php';
class User
{
    protected $name;
    protected $lastname;
    protected $sconto = 10;
    protected $card = [];

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

    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 
    public function setCard($card)
    {
        // $this->card = $card;
            foreach ($card as $cc) {
                if (!is_int($cc->getNumber())) {
                    throw new Exception('Non mi hai passato un numero');
                }else {
                    $this->card[] = $cc;
                }
            }
        return $this;
        
    }
}




?>