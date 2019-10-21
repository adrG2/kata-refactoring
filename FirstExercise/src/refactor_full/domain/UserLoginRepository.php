<?php

namespace FirstExercise;

interface UserLoginRepository
{

    public function getByEmail(string $mail): \User;

    public function getByEmailAndPassWord(string $mail, string $password): \User;

}