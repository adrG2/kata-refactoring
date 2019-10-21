<?php

namespace FirstExercise;

use http\Exception\InvalidArgumentException;
use mysqli;

final class UserLogin implements UserLoginRepository
{

    private $connectionDb;

    public function __construct(DBConnection $connectionDb)
    {
        //$this->connectionDb = $connectionDb->connect();
        $this->connectionDb = new MysqliConnection();
    }


    public function getByEmail(string $mail): \User
    {
        $stmt = $this->connectionDb->connect()->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->bind_param('s', $mail);
        $stmt->execute();
    }

    public function getByEmailAndPassWord(string $mail, string $password): \User
    {
        $stmt = $this->connectionDb->connect()->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        $stmt->bind_param('ss', $mail, $password);
        $stmt->execute();
    }

    private function bindRestultToArray(mysqli $stmt) {
        $stmt->store_result();
        if($stmt->num_rows === 0) {
            throw new UserNotExistsException("El usuario no existe");
        }

    }

}