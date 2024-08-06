<?php

class Commercial extends Employee implements InterfaceEmployee  {
    
    private int $salaire;

    
    private int $bonus;


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

}