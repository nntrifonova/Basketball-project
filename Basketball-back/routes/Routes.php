<?php
namespace Server;

use ReflectionClass;
use Server\MainPageController;
use Server\Router;

Class Routes {

    public $router;

    public $routes= ['uri' => ['/admin/main' => [MainPageController::class, 'getAll'],
                                           'methodType' => ['GET','POST'],
                               '/admin/main(int:id)' => ['className' => '\\Server\\MainPageController',
                                                   'methodType' => ['GET', 'DELETE', 'PUT'],
                                                   'methodName' => 'update']]];

    public function __construct()
    {
        $this->router = new Router('');
    }

    /**
     * @throws \ReflectionException
     */
    public function matchingArgs()
     {
         foreach ($this->routes['uri'] as $uri=> $route) {

             $class = $this->routes['uri'][$uri]['className'];
             $method = $route['methodName'];
             $this->router->matcher($route['methodType'][0], $uri, $class, $method);
         }
     }

}
