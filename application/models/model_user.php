<?php

/**
 * Created by PhpStorm.
 * User: Марина
 * Date: 30.04.2018
 * Time: 17:30
 */

class Model_User extends Model
{
    private $family;
    private $name;
    private $sex;

    public function __construct($family, $name, $sex)
    {
        $this->family = $family;
        $this->name = $name;
        $this->sex = $sex;
        parent::__construct();

    }


    public function save () {

        $query = "INSERT INTO users (`family`,`name`,`sex`) VALUES ('$this->family', '$this->name', '$this->sex')";
        $this->connection->query($query);
        $userId = mysqli_insert_id($this->connection);
        return $userId;
    }
}