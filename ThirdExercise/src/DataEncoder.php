<?php

namespace ThirdExercise;

use ThirdExercise\JsonEncoder;
use ThirdExercise\refactored\ParseData;

final class DataEncoder
{

    private $encoder;
    private $parseData;


    public function __construct(Encoder $encoder, ParseData $parseData)
    {
        $this->encoder = $encoder;
        $this->parseData = $parseData;
    }


    public function encode($data, Encoder $encoder): string
    {
        $data = $this->parseData->prepareData($data, $encoder);
        return $encoder->encode($data);
    }

}

