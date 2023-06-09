<?php
use Server\Application;
use Server\Routes;

$app = new Application(dirname('Core/Application.php',1));

//require '../routes/Routes.php';

$router = new Routes();
print ($router->matchingArgs());
return $app;