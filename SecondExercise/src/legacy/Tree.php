<?php


namespace SecondExercise;


class Tree implements Figure
{
    protected $name;

    public function __construct($name, $position)
    {
        $this->setName($name);
        $this->setPosition($position);
    }

    public function jump()
    {
        return;
    }

    public function walk()
    {
        return;
    }

    public function rotate()
    {
        $position->rotate($degrees);
    }

    public function getName()
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

    public function getPosition()
    {
        // TODO: Implement getPosition() method.
    }
}
