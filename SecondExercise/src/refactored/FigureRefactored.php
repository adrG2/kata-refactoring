<?php


namespace SecondExercise;


interface FigureRefactored
{
    public function getName(): string;

    public function getPosition(): Position;

    public function rotate(int $degrees): void;
}