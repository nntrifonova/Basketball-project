<?php

namespace Server;

class Controller
{
    public $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function response($status = 200, $data = [], $messages = [])
    {
        return responseJson($status, $data, $messages);
    }
}