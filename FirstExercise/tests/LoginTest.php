<?php
declare(strict_types=1);

use FirstExercise\LoginException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use FirstExercise\LoginController;

final class LoginTest extends TestCase
{
    private const LOGIN_SUCCESSFUL = 'Login successful';
    private const PHP_UNIT_IT_S_WORKS_FINE = "PhpUnit it's works fine";

    private $loginControllerStub;


    public function setUp(): void
    {
        $this->loginControllerStub = $this->getMockBuilder(LoginController::class)
            ->setMethods(['login'])
            ->getMock();
    }

    public function testPhpUnitIsOk(): void
    {
        $this->loginControllerStub->method('login')->willReturn(self::LOGIN_SUCCESSFUL);
        $this->assertEquals(
            self::LOGIN_SUCCESSFUL,
            $this->loginControllerStub->login(),
            self::PHP_UNIT_IT_S_WORKS_FINE);
    }


}