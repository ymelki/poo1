<?php

class Grh {
    // propriété
    private $unEmployee;
    private $unPrimable;

    //méthode
    public function setUnEmployee(InterfaceEmployee $employee  ){
        $this->unEmployee[]=$employee->getSalaire();

    }

    public function setUnPrimable(InterfacePrime $InterfacePrime  ){
        $this->unPrimable[]=$InterfacePrime->getPrime();

    }
}