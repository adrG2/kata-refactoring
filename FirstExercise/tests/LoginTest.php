<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use FirstExercise\LoginController;

final class LoginTest extends TestCase
{
    private const LOGIN_SUCCESSFUL = 'Login successful';
    private const PHP_UNIT_IT_S_WORKS_FINE = "PhpUnit it's works fine";

    public function testPhpUnitIsOk(): void {
        $mockObject =  $this->createMock(LoginController::class);
        $mockObject->method('login')->willReturn(self::LOGIN_SUCCESSFUL);
        $this->assertEquals(self::PHP_UNIT_IT_S_WORKS_FINE, $mockObject->login(), self::LOGIN_SUCCESSFUL);
    }




}