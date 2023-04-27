<?php

namespace Core;

class BaseController
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