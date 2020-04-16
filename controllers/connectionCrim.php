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