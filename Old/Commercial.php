<?php

class Commercial extends Employee implements InterfaceEmployee, InterfacePrime  {
    
    private int $salaire;


    
    private int $bonus;

    private int $prime=3;

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function trouveMission(
        Ingenieur $ingenieur){
        echo "moi je trouve une mission pour 
        un ingénieur .". $ingenieur->getCompetence();
    }


    /**
     * Get the value of prime
     */ 
    public function getPrime()
    {
        return $this->prime;
    }

    /**
     * Set the value of prime
     *
     * @return  self
     */ 
    public function setPrime($prime)
    {
        $this->prime = $prime;

        return $this;
    }
}