<?php

use Server\MainPageController;
use Server\Router;

Class Routes {
    public $routes = ['/main' => ['className' => 'MainPageController', 'methodName' => ['getAll', 'create'], 'method' => ['GET', 'POST']],
    '/main(int:id)' => ['className' => 'MainPageController', 'methodName' => ['getById', 'delete', 'update'], 'method' => ['GET', 'DELETE', 'PUT']],];



}

//$routes = ['/main' => ['className' => 'MainPageController', 'methodName' => ['getAll', 'create'], 'method' => ['GET', 'POST']],
//    '/main(int:id)' => ['className' => 'MainPageController', 'methodName' => ['getById', 'delete', 'update'], 'method' => ['GET', 'DELETE', 'PUT']],];
//
/////     $router = new Router('../App');
//        $mainPageController = new MainPageController();
//

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