<?php

use Server\MainPageController;
use Server\Router;

Class Routes {

    public $router;
    public $mainPageController;


    //кажется так
    public $routes= ['uri' => ['/main' => ['className' => ['mainPageController' => ['methodType' => ['GET','POST', 'DELETE', 'PUT']]]]],
        '/main(int:id)' => ['className' => ['mainPageController'=> ['methodType' => ['GET','POST', 'DELETE', 'PUT']]]]];


//    public $routes_= ['uri' => ['/main', '/main(int:id)'], 'className' => 'mainPageController',
//        'methodType' => ['GET','POST', 'DELETE', 'PUT'], 'methodName' => ['getAll', 'create', 'getById', 'delete', 'update']];


    public function __construct()
    {
        $this->router = new Router('../App');
        $this->mainPageController = new MainPageController();
    }

    public function argumentsForMatcher($routes, $router){
        $method = $this->router.determineHttpMethod();

        if( in_array($method, $this->routes['methodType'])){            //Возможно это лишняя проверка
            return $this->router.matcher($method, );

        }

    }
     public function matchingArgs($router){
         foreach ($this->routes as $key => $value) {
             $router->matcher($this->routes[$key], ...); //TODO

     }


}

//$router->respond('GET', '/main', function () use ($mainPageController) {
//    echo $mainPageController->getAll();
//});
//$router->respond('GET', '/main/(int:id)', function ($id) use ($mainPageController) {
//    echo $mainPageController->getById($id);
//});
//$router->respond('POST', '/main', function () use ($mainPageController) {
//    echo $mainPageController->create();
//});
//$router->respond('PUT', '/main/(int:id)', function ($id) use ($mainPageController) {
//    echo $mainPageController->update($id);
//});
//$router->respond('DELETE', '/main/(int:id)', function ($id) use ($mainPageController) {
//    echo $mainPageController->delete($id);
//});