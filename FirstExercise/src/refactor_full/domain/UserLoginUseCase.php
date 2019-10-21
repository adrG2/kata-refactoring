<?php

namespace FirstExercise;

interface UserLoginUseCase
{
    public function login(string $email, string $password): \User;
}