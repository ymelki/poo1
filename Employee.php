<?php

class Employee {

    // propriété
    public int $id;
    public string $nom;
    public string $prenom;
    private int $age;

    // méthode
    public function setAge($age){
        if ($age < 137){
          $this->age=$age;
        }
    } 
}