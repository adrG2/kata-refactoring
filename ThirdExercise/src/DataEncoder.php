<?php

namespace ThirdExercise;

final class DataEncoder
{

    private $encoder;

    public function __construct(Encoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function encode($data): string
    {
        $data = $this->encoder->prepareData($data);
        return $this->encoder->encode($data);
    }

}
