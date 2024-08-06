<?php

class Stagiaire extends Employee{

    public function travaille(Patron $patron){
        echo "Le stagiaire travaille pour ".
        $patron->getNom(); 

    }
    
}