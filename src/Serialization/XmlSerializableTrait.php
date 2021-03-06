<?php
declare(strict_types=1);

namespace Ettore\Serialization;


use JsonSerializable;

trait XmlSerializableTrait
{
    private array $arrayRepresentation;
    private string $xmlTag;

    public function xmlSerializeContent(bool $prettyXml = false): string
    {
        $nl = $prettyXml ? PHP_EOL : '';

        $xmlContent = '';

        $arrayRepresentation = $this instanceof JsonSerializable ?
            $this->jsonSerialize() :
            $this->arrayRepresentation;

        foreach ($arrayRepresentation as $property => $value) {
            if ($value instanceof XmlSerializable)
                $xmlContent .= $value->xmlSerialize($prettyXml);
            else
                $xmlContent .= XmlUtils::renderXml((string)$value, $property);

            $xmlContent .= $nl;
        }

        $xmlTag = $this instanceof XmlSerializable ?
            $this->xmlTag() :
            $this->xmlTag;

        return XmlUtils::renderXml($xmlContent, $xmlTag);
    }
}