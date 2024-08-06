<?php

class Commercial extends Employee  {
    private int $bonus;

    public function trouveMission(
        Ingenieur $ingenieur){
        echo "moi je trouve une mission pour 
        un ingénieur .". $ingenieur->getCompetence();
    }



 
}