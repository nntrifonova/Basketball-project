<?php

namespace Core;

use Throwable;
use ErrorException;

class Application
{
    /**
     * The base path of the application installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * Create a new application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        $this->basePath = $basePath;

    }


    public function basePath()
    {
        $this->basePath = realpath(getcwd(). '/../');

        return $this->basePath;
    }
}