<?php
// require("model\business/fromage.php");/
// require("model/business/membre.php");
// require("model/business/pays.php");
// require("model/business/avis.php");
require('model/Autoloader.php');
Autoloader::register();

$t = array('identifiant'=>1,'Nom'=>'Camembert');
$camembert = new \ClubFromage\model\business\fromage($t);

$t = array('identifiant'=>2,'Nom'=>'roquefort');
$roquefort = new \ClubFromage\model\business\fromage($t);

echo $camembert -> _Nom;
echo $camembert -> _identifiant;

echo $roquefort -> _Nom;
echo $roquefort -> _identifiant;
