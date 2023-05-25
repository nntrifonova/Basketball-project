<?php
namespace Server;

use Server\MainPageController;
use Server\Router;

Class Routes {

    public $router;


    //кажется так
    public $routes= ['uri' => ['/main' => ['className' => 'mainPageController' ,
                                           'methodType' => ['GET','POST'],
                                           'methodName' => 'getAll'],
                               '/main(int:id)' => ['classNames' => 'mainPageController',
                                                   'methodType' => ['GET', 'DELETE', 'PUT'],
                                                   'methodName' => 'delete']]];

    public function __construct()
    {
        $this->router = new Router('../App');
    }

//    public function argumentsForMatcher($routes, $router){
//        $method = $this->router.determineHttpMethod();
//
//        if( in_array($method, $this->routes['methodType'])){            //Возможно это лишняя проверка
//            return $this->router.matcher($method, );
//
//        }
//
//    }
     public function matchingArgs()
     {
         foreach ($this->routes['url'] as $uri=>$route) {
             $class = new ReflectionClass($route['classNames']);
             $this->router->matcher($route['methodType'], $uri, $class);
                 $method = $class->getMethod(str($route['methodName']));
                 echo $method;
         }
     }

}
