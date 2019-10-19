<?php
declare(strict_types=1);

use FirstExercise\LoginException;
use PHPUnit\Framework\TestCase;
use FirstExercise\LoginController;

final class LoginTest extends TestCase
{
    private const LOGIN_SUCCESSFUL = 'Login successful';
    private const PHP_UNIT_IT_S_WORKS_FINE = "PhpUnit it's works fine";

    private $stub;

    public function setUp(): void
    {
        $this->stub = $this->createMock(LoginController::class);
    }

    public function testPhpUnitIsOk(): void
    {
        $this->stub->method('login')->willReturn(self::LOGIN_SUCCESSFUL);
        $this->assertEquals(self::LOGIN_SUCCESSFUL, $this->stub->login(),self::PHP_UNIT_IT_S_WORKS_FINE);
    }

    public function testExceptionLoginMethod(): void {
        $this->stub->method('login')->willThrowException(new LoginException('Login not valid'));
    }




}