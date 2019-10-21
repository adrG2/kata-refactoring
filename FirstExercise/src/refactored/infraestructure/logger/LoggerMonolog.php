<?php


namespace FirstExercise;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;

final class LoggerMonolog implements LoggerConfiguration
{

    public function getLogger(): \Monolog\Logger
    {
        try {
            return new Logger(env('LOGGER_NAME'), [new StreamHandler(env('LOGGER_STREAM'))]);
        } catch (\Exception $e) {
            //TODO Handle this Exception
            // Se captura excepción de tipo Exception porque la propia clase la lanza.
            throw new LoggerException($e->getMessage());
        }
    }
}