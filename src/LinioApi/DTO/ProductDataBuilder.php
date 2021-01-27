<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


/**
 * @method self conditionType(string $conditionType)
 * @method self shortDescription() shortDescription(string $shortDescription)
 * @method self packageWeight() packageWeight(int $packageWeight)
 * @method self packageWidth() packageWidth(int $packageWidth)
 * @method self packageLength() packageLength(int $packageLength)
 * @method self packageHeight() packageHeight(int $packageHeight)
 * @method ProductData build()
 */
class ProductDataBuilder
{
    use BuilderTrait;

    public function createInstance(): self
    {
        $this->instance = new ProductData();
        return $this;
    }
}