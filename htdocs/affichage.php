<?php


// require("model\business/fromage.php");/
// require("model/business/membre.php");
// require("model/business/pays.php");
// require("model/business/avis.php");
require __DIR__ . '\vendor\autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use model\business;


// create a log channel
$log = new \Monolog\Logger('logs');
$log->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__.'\logs.log', Logger::WARNING));

$tableau1 = [
    'identifiant'=> 1,
    'Nom'=>"Mael",
    'pseudo'=>"Mael___",
    'Email'=>'chanliaumael@gmail.com',
    'DateDerniereConnexion'=>'2020-05-07',
    'DateEntreDansClub'=>'2007-09-03',
    'DescriptionRole'=>"xx",
    'present'=>0
];
$tableau2 = [
    'identifiant'=> 2,
    'Nom'=>"Hugo",
    'pseudo'=>"HugZerr",
    'Email'=>'combethugo@gmail.com',
    'DateDerniereConnexion'=>'2019-12-12',
    'DateEntreDansClub'=>'2012-03-09',
    'DescriptionRole'=>"xx",
    'present'=>0
];
$encoded1 = json_encode($tableau1);
echo $encoded1;
echo '<br/>';
$encoded2 = json_encode($tableau2);
echo $encoded2;
echo '<br/>';
echo '<br/>';
$membre1 = new business\membre(json_decode($encoded1, true));
print_r($membre1);
echo '<br/>';
$membre2 = new business\membre(json_decode($encoded2, true));
print_r($membre2);
echo '<br/>';
echo '<br/>';
echo 'Date entree membre 1 : ';
echo $membre1->getNom();
echo '<br/>';
echo 'Date entree membre 2 : ';
echo $membre2->getNom();
echo '<br/>';echo '<br/>';

$member = business\membre::jsonParse($encoded1);

//Affichage du nouveau membre
echo 'ID : '.$member->getIdentifiant().'</br>';
echo 'Nom '.$member->getNom().'</br>';
echo 'Email : '.$member->getEmail().'</br>';
echo 'Présent ? : '.$member->getPresent().'</br>';
echo 'Pseudo: '.$member->getPseudo().'</br>';
echo 'Derniere connexion : '.$member->getDateDerniereConnexion().'</br>';
echo 'Date Entree: '.$member->getDateEntreDansClub().'</br>';
echo 'Description role: '.$member->getDescriptionRole().'</br>';