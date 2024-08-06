<?php

class Grh {
    // propriété
    private $unEmployee;

    //méthode
    public function setUnEmployee(InterfaceEmployee $employee  ){
        $this->unEmployee[]=$employee->getSalaire();

    }
}