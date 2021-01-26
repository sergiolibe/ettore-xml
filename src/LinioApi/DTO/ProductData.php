<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


use JsonSerializable;
use Ettore\Serialization\XmlSerializable;
use Ettore\Serialization\XmlUtils;

class ProductData implements JsonSerializable, XmlSerializable
{
    private ?string $conditionType = null;
    private ?string $shortDescription = null;
    private ?int $packageWeight = null;
    private ?int $packageWidth = null;
    private ?int $packageLength = null;
    private ?int $packageHeight = null;

    public function jsonSerialize(): array
    {
        return [
            "ConditionType" => (string)$this->conditionType,
            "ShortDescription" => (string)$this->shortDescription,
            "PackageWeight" => (int)$this->packageWeight,
            "PackageWidth" => (int)$this->packageWidth,
            "PackageLength" => (int)$this->packageLength,
            "PackageHeight" => (int)$this->packageHeight,
        ];
    }

    public function xmlSerialize(bool $prettyXml = false): string
    {
        $nl = $prettyXml ? PHP_EOL : '';
        $xmlTag = 'ProductData';
        $xmlContent = '';

        $arrayRepresentation = $this->jsonSerialize();

        foreach ($arrayRepresentation as $property => $value) {
            if ($value instanceof XmlSerializable)
                $xmlContent .= $value->xmlSerialize($prettyXml);
            else
                $xmlContent .= XmlUtils::renderXml((string)$value, $property);

            $xmlContent .= $nl;
        }

        return XmlUtils::renderXml($xmlContent, $xmlTag);
    }

    public static function builder(): ProductDataBuilder
    {
        $builder = new ProductDataBuilder();
        $builder->createProductData();
        return $builder;
    }

    public function setConditionType(string $conditionType): void
    {
        $this->conditionType = $conditionType;
    }

    public function setShortDescription(string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    public function setPackageWeight(int $packageWeight): void
    {
        $this->packageWeight = $packageWeight;
    }

    public function setPackageWidth(int $packageWidth): void
    {
        $this->packageWidth = $packageWidth;
    }

    public function setPackageLength(int $packageLength): void
    {
        $this->packageLength = $packageLength;
    }

    public function setPackageHeight(int $packageHeight): void
    {
        $this->packageHeight = $packageHeight;
    }
}