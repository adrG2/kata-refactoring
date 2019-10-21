<?php

namespace FirstExercise;

final class UserLoginService implements UserLoginUseCase
{

    private $userLoginRepository;
    private $logger;
    private $passwordEncoder;


    public function __construct(
        UserLoginRepository $userLoginRepository,
        LoggerMonolog $logger,
        PasswordEncoder $passwordEncoder
    ) {
        $this->userLoginRepository = $userLoginRepository;
        $this->logger = $logger;
        $this->passwordEncoder = $passwordEncoder;
    }


    public function login(string $email, string $password): \User
    {
        $passwordEncoder = $this->passwordEncoder->encode($password);
        $user = $this->userLoginRepository->getByEmailAndPassWord($email, $passwordEncoder);
        if (isNull($user)) {
            $this->userNotLogged($email);
        }
        $this->logger->log(\Monolog\Logger::INFO, 'Usuario autenticado: %email%', ['email' => $user->getEmail()]);
    }


    public function userNotLogged(string $email)
    {
        isNull($this->userLoginRepository->getByEmail($email))
            ? $this->view->message = "password incorrecto"
            : $this->view->message = "el email no existe";
    }


}