<?php
session_start();
use Doctrine\Common\Proxy\Autoloader;
use Adrien\AgentsMangaer;

$nom = htmlspecialchars($_POST['nom']);
$connection = new Adrien\recherchesMangager;
$contact = $connection->read($nom);

print_r('contact');