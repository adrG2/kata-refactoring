<?php


namespace SecondExercise;


class Person implements Figure
{
    protected $acceleration = 1;

    protected $color;
    protected $name;

    public function __construct($name, $position, $color)
    {
        $this->setName($name);
        $this->setPosition($position);
        $this->color = $color;
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }

    public function jump()
    {
        $x = $position->getX();
        $x += $someWeirdNumber /* + some weird math */
        ;
        $position->setX($x);
    }

    public function rotate($degrees)
    {
        $position->rotate($degrees);
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
}

