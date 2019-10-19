<?php

namespace SecondExercise;

interface Figure
{
    public function getName();

    public function getPosition();

    public function rotate($degrees);

    public function jump();

    public function walk();
}