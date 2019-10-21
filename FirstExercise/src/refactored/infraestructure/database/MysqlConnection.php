<?php

namespace FirstExercise;

final class MysqlConnection implements DBConnection
{

    public function connect() : \mysqli
    {
        return mysqli_connect(env('DB_HOST', env('DB_USER'), env('DB_PASS'), env('DB_DATABASE')));
    }
}