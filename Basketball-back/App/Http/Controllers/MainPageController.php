<?php

namespace Server;

class MainPageController extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new Posts();
    }

    public function getAll()
    {
        return $this->response(200, $this->model->get());
    }
//
//    public function getById($id)
//    {
//        return $this->response(200, $this->model->getById($id));
//    }
//
//    public function create()
//    {
//        $user = $this->model->create($this->request->body());
//
//        return $this->response(200, [], ['title' => 'User successfully created.']);
//    }
//
    public function update($userId)
    {
        $user = $this->model->update($this->request->parameters(), $userId);

        return $this->response(200, [], ['title' => 'User successfully updated.']);
    }
}