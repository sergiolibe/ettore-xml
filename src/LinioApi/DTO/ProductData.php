<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


/**
 * @method void setConditionType(?string $conditionType)
 * @method void setShortDescription(?string $shortDescription)
 * @method void setPackageWeight(?int $packageWeight)
 * @method void setPackageWidth(?int $packageWidth)
 * @method void setPackageLength(?int $packageLength)
 * @method void setPackageHeight(?int $packageHeight)
 * @method static ProductDataBuilder builder()
 */
class ProductData extends XmlEntity
{
    protected ?string $conditionType = null;
    protected ?string $shortDescription = null;
    protected ?int $packageWeight = null;
    protected ?int $packageWidth = null;
    protected ?int $packageLength = null;
    protected ?int $packageHeight = null;

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
}