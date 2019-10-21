<?php


namespace FirstExercise;


final class PasswordSha256 implements PasswordEncoder
{

    public function encode(string $pass): String
    {
        return hash('sha256', $pass);
    }
}