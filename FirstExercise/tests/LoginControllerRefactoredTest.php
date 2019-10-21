<?php

namespace FirstExercise;

use PHPUnit\Framework\TestCase;
use FirstExercise\LoginControllerRefactored;

class LoginControllerRefactoredTest extends TestCase
{

    private $loginControllerStub;

    final public function setUp(): void
    {
        $this->loginControllerStub = $this->getMockBuilder("")
            ->setMethods(['login'])
            ->getMock();
    }


}
