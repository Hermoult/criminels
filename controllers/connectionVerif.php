<?php
session_start();
use Doctrine\Common\Proxy\Autoloader;
use Adrien\AgentsMangaer;

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
        echo "mauvais mdp";
    }


    /* $agent['niveau_accreditation_a'] */


// 2 et 3 => formulaire de nom criminel
//1 => choix entre rechercher criminel et consultr criminel 


    /* if($mail == $d['mail'] && $mdp == $d['mdp']){
        header('location: ../commande.html'); ;
    }    else{
        header('location:erreur.php'); ;
    }
    */

/*     theonlyone , poulidor et agent. Ces mots de passe ont été hashé grâce à password_hash(). */