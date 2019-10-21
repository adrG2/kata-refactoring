<?php


namespace SecondExercise;


final class PersonRefactored implements FigureRefactored
{
    protected $acceleration = 1;

    protected $color;
    protected $name;
    private $someWeirdNumber;
    private $position;

    public function __construct($name, Position $position, $color)
    {
        $this->setName($name);
        $this->setPosition($position);
        $this->color = $color;
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }

    public function jump():void
    {
        $x = $this->position->getX();
        $x += $this->someWeirdNumber /* + some weird math */;
        $this->position->setX($x);

    }

    public function rotate(int $degrees): void
    {
        $this->position->rotate($degrees);
    }

    public function walk()
    {
        $position->move($this->acceleration);
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

    public function positionCoordinateX() {
        $this->position->getX();
    }
    public function positionCoordinateY() {
        $this->position->getY();
    }
}

