<?php
namespace Core\Base;

use Core\Database\Db;

/**
 * Базовый класс для моделей
 */

class BaseModel
{
    /**
     * Название таблицы в бд
     * 
     * @var string
     */
    protected $table;

    /**
     * Свойство для взаимодействия с бд
     * 
     * @var Db
     */
    protected $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id`={$id}";

        if ($result = $this->db->query($sql)) {
            return $this->db->fetchAssoc($result);
        } else {
            // render error 404 template
        }
    }

    /**
     * Удаление елемента из базы данных по id
     */
    public function delete($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE `id`={$id}";

        if ($result = $this->db->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

}
