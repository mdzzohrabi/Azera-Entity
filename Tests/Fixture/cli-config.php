<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
$entityManager = require 'db.php';

return ConsoleRunner::createHelperSet($entityManager);