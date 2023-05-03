<?php

use Server\MainPageController;
use Server\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| Enjoy building your API!
|
*/

$router = new Router('../App/');
$mainPageController = new MainPageController();

// Users
$router->respond('GET', '/main', function () use ($mainPageController) {
    echo $mainPageController->getAll();
});
$router->respond('GET', '/main/(int:id)', function ($id) use ($mainPageController) {
    echo $mainPageController->getById($id);
});
$router->respond('POST', '/main', function () use ($mainPageController) {
    echo $mainPageController->create();
});
$router->respond('PUT', '/main/(int:id)', function ($id) use ($mainPageController) {
    echo $mainPageController->update($id);
});
$router->respond('DELETE', '/main/(int:id)', function ($id) use ($mainPageController) {
    echo $mainPageController->delete($id);
});