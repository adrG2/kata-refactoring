<?php

namespace FirstExercise;

interface UserLoginUseCase
{
    public function login(string $email, PasswordEncoder $password): void;
}