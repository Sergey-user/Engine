<?php
namespace Core\Base;

use Core\View;

/**
 * Базовый контроллер для обработки запросов
 */

class BaseController
{
    /**
     * Модель данного контроллера для взаимодействия с бд
     * 
     */
    protected $model;

    /**
     * Свойство для взаимодействия с шаблонами
     * 
     * @var View
     */
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
}