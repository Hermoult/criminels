<?php
session_start();
use Doctrine\Common\Proxy\Autoloader;
require_once('../class/RecherchesManager.php');

$nom = htmlspecialchars($_POST['nom']);

$connection = new Adrien\recherchesMangager;
$contact = $connection->read($nom);
$_SESSION = $contact;
if ($contact['nom_r'] == $nom){
    header ('location:../views/criminels.php');
    }else{
    echo "pas de profil corespondant";
}
