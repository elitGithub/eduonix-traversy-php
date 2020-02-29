<?php

require_once 'includes.php';

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}