<?php


namespace FirstExercise;


interface PasswordEncoder
{
    public function encode(string $password): String;
}