<?php

namespace FirstExercise;

final class MysqliConnection implements DBConnection
{

    private $connection;

    public function __construct()
    {
        //TODO Acoplamiento a revisar
        $this->connection = mysqli_connect(env('DB_HOST', env('DB_USER'), env('DB_PASS'), env('DB_DATABASE')));
        $this->checkConnection();
    }

    public function connect()
    {
        return $this->connection;
    }

    public function checkConnection(): void
    {
        if ($this->connection->connect()->connect_error) {
            throw new ConnectionDbException("Database connection had failed");
        }
    }
}