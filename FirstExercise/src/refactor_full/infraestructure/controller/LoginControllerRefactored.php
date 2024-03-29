<?php

namespace FirstExercise;

final class LoginControllerRefactored extends Controller
{

    private $userLoginUseCase;


    public function __construct(UserLoginUseCase $userLoginUseCase)
    {
        $this->userLoginUseCase = $userLoginUseCase;
    }


    public function login(string $email, string $password): void
    {
        $user = $this->userLoginUseCase->login($email, $password);
        session_start();
        http_redirect('home');
    }
}