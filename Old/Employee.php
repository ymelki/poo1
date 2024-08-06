<?php

abstract class Employee {

    // propriété
    private int $id;
    private string $nom;
    private string $prenom;
    private int $age;

    public function __construct(string $nom,
                                string  $prenom,
                                int $age)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        echo "j'instancie un objet Ingenieur";
    }

    // méthode
    public function setAge(int $age){
        if ($age < 137){
          $this->age=$age;
        }
    } 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }
}