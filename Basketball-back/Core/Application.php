<?php

namespace Core;
class Application
{
    /**
     * The base path of the application installation.
     *
     * @var string
     */
    protected string $basePath;

    /**
     * Create a new application instance.
     *
     * @param string|null $basePath
     * @return void
     */
    public function __construct(string $basePath)
    {
        $this->basePath = realpath(getcwd(). '/../');
        $this->basePath = $basePath;

    }


    public function basePath()
    {
        $this->basePath = realpath(getcwd(). '/../');

        return $this->basePath;
    }
}