<?php

namespace FirstExercise;

use http\Exception\InvalidArgumentException;
use Monolog\Handler\StreamHandler;

final class LoginControllerRefactoredOnlyCode extends Controller
{

    private $logger;
    private $connection;

    public function __construct(LoggerMonolog $logger, DBConnection $connection)
    {
        $this->logger = $logger;
        $this->connection = $connection;
    }

    public function login()
    {
        $email = $_GET["email"];
        $password = $_GET["password"];
        $this->checkNullInputParams($_GET["email"], $_GET["password"]);
        $this->sanitizeParams($email, $password);
        $userWithEmailAndPassword =
            $this->connection->query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if ( $this->userIsNotLogged($userWithEmailAndPassword) ) {
            $this->userNotLoggedTreatment($email);
        }
        session_start();
        $this->logger->log(\Monolog\Logger::INFO, 'Usuario autenticado: %email%', ['email' => $email]);
        http_redirect('home');
    }

    private function checkNullInputParams(string $email, string $password) : void {
        $emailIsEmpty = empty(($email));
        $passwordIsEmpty = empty($password);
        if ($emailIsEmpty && $passwordIsEmpty) {
            throw new InvalidArgumentException("Parametros de entrada no validos");
        }
    }

    private function sanitizeParams(string $email, string $password) : void
    {
        //TODO Implementar escapado de carácteres para evitar SQL Injection
    }

    public function userIsNotLogged($user): bool {
        return !$this->isThereResult($user);
    }

    public function isThereResult($resultQuery): bool
    {
        return $resultQuery->num_rows > 0;
    }

    public function userNotLoggedTreatment(string $mail)
    {
        $userWithEmail = $this->connection->query("SELECT * FROM users WHERE email = '{$email}'");
        return $this->isThereUserWithEmail($userWithEmail)
            ? $this->view->message = "password incorrecto"
            : $this->view->message = "el email no existe";
    }

    public function isThereUserWithEmail($userWithEmail): bool
    {
        return $this->isThereResult($userWithEmail);
    }

}
