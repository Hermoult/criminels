<?php
session_start();
$pseudo = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST['pass']);

require ('db.php');


    $stmt = $db-> prepare("SELECT * FROM agents WHERE pseudo_a = ?");
    $stmt->execute([$pseudo]);
    $agent = $stmt->fetch();


    if(password_verify($pass,$agent['mot_de_passe_a'])){
    header ('location:../views/interface.php');
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