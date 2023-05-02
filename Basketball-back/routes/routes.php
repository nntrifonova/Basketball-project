<?php

use Core\Router;
use App\Controllers\MainPageController;

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
$userController = new MainPageController();

// Users
$router->respond('GET', '/users', function () use ($userController) {
    echo $userController->getAll();
});
$router->respond('GET', '/users/(int:id)', function ($id) use ($userController) {
    echo $userController->getById($id);
});
$router->respond('POST', '/users', function () use ($userController) {
    echo $userController->create();
});
$router->respond('PUT', '/users/(int:id)', function ($id) use ($userController) {
    echo $userController->update($id);
});
$router->respond('DELETE', '/users/(int:id)', function ($id) use ($userController) {
    echo $userController->delete($id);
});