<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/../models/Entities");
$isDevMode = true;
$proxyDir = __DIR__ . "/../models/Proxies";
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// the connection configuration
$dbParams = array(
    'dbname'   => 'ciminels',
    'user'     => 'adrien',
    'password' => 'adrien',
    'host' => 'localhost:3306',
    'driver'   => 'pdo_mysql',
);

$entityManager = EntityManager::create($dbParams, $config);