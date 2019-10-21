<?php


namespace SecondExercise;


final class TreeRefactored implements FigureRefactored
{
    private $name;
    private $position;

    public function __construct(string $name, Position $position)
    {
        $this->setName($name);
        $this->setPosition($position);
    }

    public function rotate(int $degrees): void
    {
        $this->position->rotate($degrees);
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPosition():Position
    {
        // TODO: Implement getPosition() method.
    }
}
