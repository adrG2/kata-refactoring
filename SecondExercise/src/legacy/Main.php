<?php


namespace SecondExercise;


class Main
{
    protected $figures = array();

    public static function game()
    {
        $figures[] = new Person();
        $figures[] = new Tree();
        GameScreen::init('800', '600');
    }

    public function draw()
    {
        foreach ($this->figures as $figure) {

            if (Game::detectKeyJump()) {
                $figure->jump();
            }

            $x = $figure->getPosition()->getX();
            $y = $figure->getPosition()->getY();
            $name = $figure->getName();
            GameScreen::put($x, $y, $name);

            if ($figure->getPosition()->getX()
                > GameScreen::getWith()
            ) {
                $figure->changeColor(new RedColor());
            }
        }
    }
}
