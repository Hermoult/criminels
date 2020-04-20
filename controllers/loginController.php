<?php
session_start();
use Doctrine\Common\Proxy\Autoloader;
use Adrien\AgentsMangaer;
use Entity\Agents;

$pseudo = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST['pass']);



require_once('../class/AgentsManager.php');
$connection = new Adrien\AgentsMangager;
$contact = $connection->read($pseudo);





print_r($contact);

// Création d'un tableau $contact avec toute la base agents

    if(password_verify($pass,$contact['mot_de_passe_a'])){

        header ('location:../views/interface.php');
        $_SESSION['accreditation'] = $contact['niveau_accreditation_a'];
        
        print_r($_SESSION);
        } else {
        header ('location:../views/accueil.php?message=Identifiant%20ou%20mot%20de%20passe%20incorrect');
    }