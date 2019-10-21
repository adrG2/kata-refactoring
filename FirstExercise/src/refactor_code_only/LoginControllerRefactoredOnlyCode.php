<?php

namespace FirstExercise;

use Monolog\Handler\StreamHandler;

class LoginController extends Controller
{

    private $logger;

    public function __construct(LoggerMonolog $logger)
    {
        $this->logger = $logger;
    }

    public function login()
    {
        if ((!empty($_GET['email'])) && (!empty($_GET['password']))) {
            $db = mysqli_connect("84.10.20.87", "root", "admin1234", "db");
            $r1 = $db->query("SELECT * FROM users WHERE email = '{$_GET['email']}' AND password = '{$_GET['password']}'");
            if ($r1->num_rows > 0) {
                session_start();
                $logger->log(\Monolog\Logger::INFO, 'Usuario autenticado: %email%', ['email' => $_GET['email']]);
                http_redirect('home');
            } else {
                $r2 = $db->query("SELECT * FROM users WHERE email = '{$_GET['email']}'");
                if ($r2->num_rows > 0) {
                    $this->view->message = "password incorrecto";
                } else {
                    $this->view->message = "el email no existe";
                }
            }
        }
    }
}
