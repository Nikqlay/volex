<?php


class Model
{

    public $connection;

    public function __construct ()
    {
        $this->connection = mysqli_connect ("localhost", "root", "", "volex");
        mysqli_set_charset($this->connection, "utf8");

        if (mysqli_connect_errno()) {
            echo "Failed to connection to MySQL: " . mysqli_connect_errno();
        }
    }
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

}