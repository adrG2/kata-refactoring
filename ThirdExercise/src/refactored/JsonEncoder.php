<?php

namespace ThirdExercise;

use ThirdExercise\refactored\ParseData;

final class JsonEncoder implements Encoder, ParseData
{

    public function encode($data): string
    {
        return "";
    }

    public function prepareData($data)
    {
        // TODO: Implement prepareData() method.
    }
}
