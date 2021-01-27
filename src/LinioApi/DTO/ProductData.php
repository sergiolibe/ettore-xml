<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


use Ettore\Serialization\XmlSerializable;
use Ettore\Serialization\XmlSerializableTrait;
use JsonSerializable;

class ProductData implements JsonSerializable, XmlSerializable
{
    use XmlSerializableTrait;

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
        return $this->xmlSerializeContent($prettyXml);
    }

    public function xmlTag(): string
    {
        return 'ProductData';
    }

    public static function builder(): ProductDataBuilder
    {
        $builder = new ProductDataBuilder();
        $builder->createInstance();
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