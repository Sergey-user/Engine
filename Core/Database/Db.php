<?php
namespace Core\Database;

/**
 * Класс для работы с бд(обёртка над функциями mysqli)
 * 
 * @version 1.0
 */

class Db
{
    private $host = 'localhost';
    private $login = 'root';
    private $password = '';
    private $db_name = 'framework';
    private $db_link;

    public function __construct()
    {
        $this->db_link = $this->connect();
    }

    /**
     * Выполняет запрос в базу данных
     */
    public function query($sql)
    {
        if ($result = mysqli_query($this->db_link, $sql)) {
            return $result;
        } else {
            return false;
        }
    }

    public function fetchAssoc(mysqli_result $result)
    {
        return mysqli_fetch_assoc($result);
    }

    public function fetchAll($result)
    {
        return mysqli_fetch_all($result);
    }

    private function connect()
    {
		$link = mysqli_connect(
			$this->host,
			$this->login,
			$this->password,
			$this->db_name
		);

        if (!mysqli_connect_errno()) {
            return $link;
        } else {
            // render error 500 template
        }
    }
}