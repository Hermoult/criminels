<?php
session_start();
use Entity\Recherches;

require_once('../class/RecherchesManager.php');
require_once('../models/Entities/Recherches.php');
$nom = htmlspecialchars($_POST['nom']);

$connection = new Adrien\recherchesMangager;
$contact = $connection->read($nom);



if ($contact['nom_r'] == $nom){
    header ('location:../views/criminels.php');
    print_r($_SESSION['accreditation']);
    }else{
        header ('location:../views/interface.php?message=Le%20criminel%20n%27existe%20pas');
}