<?php

namespace FirstExercise;

final class UserLoginService implements UserLoginUseCase
{

    private $userLoginRepository;
    private $logger;
    private $password;


    public function __construct(UserLoginRepository $userLoginRepository, LoggerMonolog $logger, PasswordEncoder $passwordEncoder)
    {
        $this->userLoginRepository = $userLoginRepository;
        $this->logger = $logger;
        $this->password = $passwordEncoder;
    }


    public function login(string $email, PasswordEncoder $passwordEncoder): bool
    {
        if( $this->userLoginRepository->getByEmailAndPassWord($email, $passwordEncoder) ) {
            $this->logger->log(\Monolog\Logger::INFO, 'Usuario autenticado: %email%', ['email' => $email]);
        }
    }
}