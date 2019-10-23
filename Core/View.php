<?php
namespace Core;

/**
 * Класс для взаимодействия с шаблонами
 * 
 * @version 1.0
 */

class View
{
    /**
     * Папка со всеми шаблонами
     * 
     * @var string
     */
    private $views_path;
    
    public function __construct()
    {
        $this->views_path = dirname(__DIR__) . '/app/Views/';
    }

    /**
     * Рендерит html шаблон
     */
    public function render(string $view_path, array $params = [])
    {
        extract($params);
        require_once $this->views_path . $view_path;
    }
}