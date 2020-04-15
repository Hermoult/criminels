<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "\\..\\models\\Entities");
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

// the connection configuration
$dbParams = array(
    'dbname'   => 'ciminels',
    'user'     => 'adrien',
    'password' => 'adrien',
    'host' => 'localhost:3306',
    'driver'   => 'pdo_mysql',
);

$entityManager = EntityManager::create($dbParams, $config);