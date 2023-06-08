<?php
namespace Server;

use ReflectionClass;
use Server\MainPageController;
use Server\Router;

Class Routes {

    public $router;

    public $routes= ['uri' => ['/admin/main' => ['className' => '\\Server\\MainPageController',
                                           'methodType' => ['GET','POST'],
                                           'methodName' => 'getAll'],
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

             $class = new ReflectionClass($this->routes['uri'][$uri]['className']);
             $method = $class->getMethod($route['methodName']);
             $this->router->matcher($route['methodType'][0], $uri, $class, $method);
         }
     }

}
