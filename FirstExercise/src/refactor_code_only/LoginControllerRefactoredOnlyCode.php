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

    public function userIsNotLogged($result): bool {
        return !$this->isThereResult($result);
    }

    public function isThereResult($result): bool
    {
        return $result->num_rows > 0;
    }

    public function userNotLoggedTreatment(string $mail): void
    {
        $userWithEmail = $this->connection->query("SELECT * FROM users WHERE email = '{$email}'");
        $this->isThereUserWithEmail($userWithEmail)
            ? $this->view->message = "password incorrecto"
            : $this->view->message = "el email no existe";
    }

    public function isThereUserWithEmail($userWithEmail): bool
    {
        return $this->isThereResult($userWithEmail);
    }

}
