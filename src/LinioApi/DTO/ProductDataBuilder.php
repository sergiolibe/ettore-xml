<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


use JsonSerializable;

class ProductDataBuilder
{
    private ProductData $productData;

    public function createProductData(): self
    {
        $this->productData = new ProductData();
        return $this;
    }

    public function conditionType(string $conditionType): self
    {
        $this->productData->setConditionType($conditionType);
        return $this;
    }

    public function shortDescription(string $shortDescription): self
    {
        $this->productData->setShortDescription($shortDescription);
        return $this;
    }

    public function packageWeight(int $packageWeight): self
    {
        $this->productData->setPackageWeight($packageWeight);
        return $this;
    }

    public function packageWidth(int $packageWidth): self
    {
        $this->productData->setPackageWidth($packageWidth);
        return $this;
    }

    public function packageLength(int $packageLength): self
    {
        $this->productData->setPackageLength($packageLength);
        return $this;
    }

    public function packageHeight(int $packageHeight): self
    {
        $this->productData->setPackageHeight($packageHeight);
        return $this;
    }

    public function build(): ProductData
    {
        return $this->productData;
    }
}