<?php	
// example.com/src/app.php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
//$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
//$routes->add('bye', new Routing\Route('/bye'));

$routes->add('functie', new Routing\Route('/functie'));
$routes->add('functie_new', new Routing\Route('/functie/new'));

return $routes;