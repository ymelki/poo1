<?php

class Ingenieur extends Employee implements InterfaceEmployee {

    private int $salaire;
    private int $competence;
    // méthode



    

    /**
     * Get the value of competence
     */ 
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set the value of competence
     *
     * @return  self
     */ 
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

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
}