<?php

class Stagiaire extends Employee implements InterfaceEmployee{

    
    private int $salaire;

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
    public function travaille(Patron $patron){
        echo "Le stagiaire travaille pour ".
        $patron->getNom(); 

    }
    
}