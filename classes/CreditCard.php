<?php 

class CreditCard 
{
    protected $circuit;
    protected $number;

    public function __construct($circuit, $number)
    {
        $this->circuit = $circuit;
        $this->number = $number;
    }

    /**
     * Get the value of circuit
     */ 
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set the value of circuit
     *
     * @return  self
     */ 
    public function setCircuit($circuit)
    {
        $this->circuit = $circuit;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
}


?>