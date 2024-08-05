<?php

// instancier la classe ingénieur
// réalité de la classe => objet de la classe
require "Ingenieur.php";

// on utilie le mot clé new pour instancier la classe


$bob=new Ingenieur();
$bob->id=1;
$bob->nom="toto";
$bob->prenom="tata";
$bob->setAge(67);

$tareq=new Ingenieur();
$tareq->id=2;
$tareq->nom="vgf";
$tareq->prenom="teta";

echo "<pre>";
print_r($bob);
echo "</pre>";

echo "<pre>";
print_r($tareq);
echo "</pre>";