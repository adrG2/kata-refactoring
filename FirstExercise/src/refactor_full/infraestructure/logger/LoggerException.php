<?php


namespace FirstExercise;


final class LoggerException extends \Exception
{

    public function streamHandlerArgument(string $message): LoggerException
    {
        return new self($message);
    }
}