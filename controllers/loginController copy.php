<?php

// AUTRE METHODE (MEILLEUR) EN UTILISANT DOCTRINE 

session_start();
require_once __DIR__ . "\\EntityManager.php";

use Entity\Agents;

class LoginController
{
    private $entityManager;
    function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function Login($username, $password)
    {
        $agent = $this->entityManager->getRepository(Agents::class)->findOneBy(['pseudoA' => $username]);
        if (isset($agent) &&  password_verify($password, $agent->getMotDePasseA())) {
            $_SESSION["user"] = $agent;
            header("Location: ../index.php?page_id=interface");
        } else {
            echo "Incorrect login provided";
        }
    }
}

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Incorrect login provided";
}

$loginController = new LoginController($entityManager);
$loginController->Login($_POST['username'], $_POST['password']);