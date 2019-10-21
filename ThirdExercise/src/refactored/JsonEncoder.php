<?php


namespace ThirdExercise;


use ThirdExercise\refactored\ParseData;

final class JsonEncoder implements Encoder, ParseData
{

    /**
     * JsonEncoder constructor.
     */
    public function __construct()
    {
    }

    public function encode(): string
    {
        return "";
    }

    public function prepareData($data, Encoder $encoder)
    {
        // TODO: Implement prepareData() method.
    }
}