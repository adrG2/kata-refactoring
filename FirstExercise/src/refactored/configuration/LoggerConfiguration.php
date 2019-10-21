<?php

namespace FirstExercise;

interface LoggerConfiguration
{

    public function getLogger(): \Monolog\Logger;
}