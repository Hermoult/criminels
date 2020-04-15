<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

/* require_once __DIR__.'/../src/bootstrap.php'; */
// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);