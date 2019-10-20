<?php

namespace FirstExercise;

use PHPUnit\Framework\TestCase;
use FirstExercise\LoginControllerRefactored;

class LoginControllerRefactoredTest extends TestCase
{

    private $loginControllerStub;

    final public function setUp(): void
    {
        $this->loginControllerStub = $this->getMockBuilder(LoginControllerRefactored::class)
            ->setMethods(['login'])
            ->getMock();
    }


    final public function testExceptionLoginMethod(): void
    {
        //$this->loginControllerStub->method('login')->willThrowException(LoginException::userNotExists(1));
    }

}
