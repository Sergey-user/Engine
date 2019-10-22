<?php

namespace Core\Http;

/**
 * Класс для работы с Сессиями
 * 
 * @version 1.0
 */

 class Session
 {
     /**
      * Добавление переменной в сессию
      */
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Получение переменной из сессии
     */
    public function get(string $key)
    {
        return $_SESSION[$key];
    }

    public function start()
    {
        session_start();
    }
 }