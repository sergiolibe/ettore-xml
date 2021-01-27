<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;

/**
 * @method self sellerSku(string $sellerSku)
 * @method self parentSku(string $parentSku)
 * @method self name(string $name)
 * @method self primaryCategory(int $primaryCategory)
 * @method self description(string $description)
 * @method self brand(string $brand)
 * @method self price(float $price)
 * @method self productId(string $productId)
 * @method self productData(ProductData $productData)
 * @method Product build()
 */
class ProductBuilder
{
    use BuilderTrait;

    public function createInstance(): self
    {
        $this->instance = new Product();
        return $this;
    }
}