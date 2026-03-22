<?php

require_once __DIR__ . "/App/Core/Routing.php";
require_once __DIR__ . "/App/Core/Helpers.php";
require_once __DIR__ . "/App/Controllers/AboutController.php";
require_once __DIR__ . "/App/Controllers/FormController.php";

use App\Core\Routing;
use App\Controllers\AboutController;
use App\Controllers\FormController;

$route = new Routing();

$route->addRoute("GET","/about", AboutController::class,"about");
$route->addRoute("GET","/about/company", AboutController::class,"about");
$route->addRoute("GET","/create-person", FormController::class,"showForm");
$route->addRoute("POST","/process-user", FormController::class,"handleSubmit");

$route->dispatch();