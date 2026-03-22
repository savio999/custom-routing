<?php

namespace App\Core;

class Routing
{
   private array $routes;

    /**
     * Dispatch the current request to the matching controller.
     *
     * @return void
     */
    public function dispatch(): void
    {
        //strip base folder if exists
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        $baseFolder = rtrim(dirname($_SERVER['SCRIPT_NAME']),"/");
        if(strpos($uri, $baseFolder) === 0) {
            $uri = substr($uri, strlen($baseFolder));
        }

        $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

        // Normalize empty URI to "/"
        if ($uri === '') {
            $uri = '/';
        }
        
        if (isset($this->routes[$httpMethod][$uri])) {
            $route = $this->routes[$httpMethod][$uri];
            $controllerClass = $route['controllerName'];
            $functionName = $route['functionName'];
            $controllerObject = new $controllerClass();
            $controllerObject->$functionName();
        } else {
            http_response_code(404);
            echo("Page not found");
        }
    }


    /**
     * Register a new route.
     *
     * @param string $httpMethod     
     * @param string $pattern        
     * @param string $controllerName 
     * @param string $functionName  
     *
     * @return void
     */
    public function addRoute(string $httpMethod, string $pattern, string $controllerName, string $functionName): void
    {
        $this->routes[strtoupper($httpMethod)][$pattern] = [
            'controllerName' => $controllerName,
            'functionName' => $functionName
        ];
    }
}