<?php
session_start();
use Doctrine\Common\Proxy\Autoloader;
require_once('../class/RecherchesManager.php');

$nom = htmlspecialchars($_POST['nom']);

$connection = new Adrien\recherchesMangager;
$contact = $connection->read($nom);
if ($contact['nom_r'] == $nom){
    header ('location:../views/criminels.php');
    print_r($_SESSION['accreditation']);
    }else{
    echo "pas de profil corespondant";
}
