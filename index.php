<?php

// instancier la classe ingénieur
// réalité de la classe => objet de la classe
require "Employee.php";
require "Ingenieur.php";

// on utilie le mot clé new pour instancier la classe


$bob=new Ingenieur("Yoel","Melki",37  ); // le constructeur est lancé
$bob->setId(1);

$toto=new Commercial("Commercial1","Melki",37);
$toto->trouveMission( $bob  );

$boss=new Patron("redsz","efds",24);

$titi=new Stagiaire("ee","sdf",23);
$titi->travaille($boss);


$grh1= new Grh();
$grh1->setUnEmployee($titi);

echo "<pre>";
print_r($bob);
echo "</pre>";
