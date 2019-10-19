<?php


class DataEncoder
{
    public function encode($data, string $format): string
    {
        if ($format === 'json') {
            $encoder = new JsonEncoder();
        } elseif ($format === 'xml') {
            $encoder = new XmlEncoder();
        } else {
            throw new InvalidArgumentException('Format not supported');
        }
        $data = $this->prepareData($data, $format);
        return $encoder->encode($data);
    }
    private function prepareData($data, string $format)
    {
        switch ($format) {
            case 'json':
                $data = $this->prepareJson($data);
            case 'xml':
                $data = $this->prepareXml($data);
                break;
            default:
                throw new InvalidArgumentException(
                    'Format not supported'
                );
        }
        return $data;
    }
    private function prepareJson(): string {
        return '{}';
    }
    private function prepareXml(): string {
        return '<xml></xml>';
    }
}

