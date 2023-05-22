<?php
use Server\Application;

$app = new Application(dirname('Core/Application.php',1));

require '../routes/routes.php';

return $app;