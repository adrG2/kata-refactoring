<?php


namespace SecondExercise;


final class MainRefactored
{
    private const WIDTH_SCREEN = '800';
    private const HEIGHT_SCREEN = '600';
    private $figure;

    public function __construct()
    {
        GameScreen::init(self::WIDTH_SCREEN, self::HEIGHT_SCREEN);
    }

    public function draw()
    {
        $figures = $this->getFigures();
        foreach ($figures as $figure) {

            $this->eventFigureJump($figure);

            $positionX = $figure->positionCoordinateX();
            $positionY = $figure->positionCoordinateY();
            $nameFigure = $figure->getName();

            $this->addFigureInGameScreen($positionX, $positionY, $nameFigure);
            $this->changeColorFigure($positionX, $figure);
        }
    }

    private function getFigures()
    {
        //
    }


    private function eventFigureJump(Figure $figure): void
    {
        if (Game::detectKeyJump()) {
            $figure->jump();
        }
    }


    private function addFigureInGameScreen($positionX, $positionY, $nameFigure): void
    {
        GameScreen::put($positionX, $positionY, $nameFigure);
    }


    private function changeColorFigure($positionX, $figure): void
    {
        $positionXGreaterThanWidthScreen = $positionX > GameScreen::getWith();
        if ($positionXGreaterThanWidthScreen) {
            $figure->changeColor(new RedColor());
        }
    }
}
