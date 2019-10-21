<?php


namespace ThirdExercise\refactored;


use ThirdExercise\Encoder;

final class XmlEncoder implements Encoder, ParseData
{

    public function encode($data): string
    {
        return "";
    }

    public function prepareData($data, Encoder $encoder)
    {
        // TODO: Implement prepareData() method.
    }
}