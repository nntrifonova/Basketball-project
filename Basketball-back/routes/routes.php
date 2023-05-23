<?php

use Server\MainPageController;
use Server\Router;

Class Routes {

    public $router;
    public $mainPageController;

    public $routes= ['uri' => ['/main', '/main(int:id)'], 'className' => 'mainPageController',
        'methodType' => ['GET','POST', 'DELETE', 'PUT'], 'methodName' => ['getAll', 'create', 'getById', 'delete', 'update']];

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
        switch ($i) {
            case 0:
                switch ($i) {
                    case 0:
                        echo $this->mainPageController->getAll();
                        break;
                    case 1:
                        echo $this->mainPageController->create();
                        break;
                }
                break;
            case 1:
                switch ($i) {
                    case 0:
                        echo $this->mainPageController->getById($id);
                        break;
                    case 1:
                        echo $this->mainPageController->delete($id);
                        break;
                    case 2:
                        echo $this->mainPageController->update($id);
                        break;
                }
                break;
        }

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