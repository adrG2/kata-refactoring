<?php


namespace SecondExercise;


interface FigureMovement extends FigureRefactored
{
    public function jump(): void;

    public function walk(): void;
}