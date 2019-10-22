<?php

namespace Core\Http;

use Core\Http\Session;

/**
 * Класс Request, объект которого будет передоваться в каждый action 
 * 
 * @version 1.0
 */

class Request
{
    /**
     * @var array 
     */
    public $POST;
    
    /**
     * @var array 
     */
    public $GET;

    /**
     * Метод пришедшего запроса
     * 
     * @var string
     */
    public $method;

    /**
     * URL пришедшего запроса
     * 
     * @var string
     */
    public $path;

    /**
     * Массив с загруженными пользователем файлами 
     * 
     *  @var array
     */
    public $FILES;

    /**
     * Объект класса Session
     * 
     * @var Session
     */
    public $session;

    public function __construct()
    {
        $this->POST = $_POST;
        $this->$_GET;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->path = $_SERVER['REQUEST_URI'];
        $this->FILES = $_FILES;
        $this->session = new Session();
        $this->session->start();
    }
}