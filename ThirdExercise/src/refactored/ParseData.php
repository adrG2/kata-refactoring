<?php


namespace ThirdExercise\refactored;


use ThirdExercise\Encoder;

interface ParseData
{
    public function prepareData($data, Encoder $encoder);
}