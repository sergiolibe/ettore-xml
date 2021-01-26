<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


class ProductBuilder
{
    private Product $product;

    public function createProduct(): self
    {
        $this->product = new Product();
        return $this;
    }

    public function sellerSku(string $sellerSku): self
    {
        $this->product->setSellerSku($sellerSku);
        return $this;
    }

    public function parentSku(string $parentSku): self
    {
        $this->product->setParentSku($parentSku);
        return $this;
    }

    public function name(string $name): self
    {
        $this->product->setName($name);
        return $this;
    }

    public function primaryCategory(int $primaryCategory): self
    {
        $this->product->setPrimaryCategory($primaryCategory);
        return $this;
    }

    public function description(string $description): self
    {
        $this->product->setDescription($description);
        return $this;
    }

    public function brand(string $brand): self
    {
        $this->product->setBrand($brand);
        return $this;
    }

    public function price(float $price): self
    {
        $this->product->setPrice($price);
        return $this;
    }

    public function productId(string $productId): self
    {
        $this->product->setProductId($productId);
        return $this;
    }

    public function productData(ProductData $productData): self
    {
        $this->product->setProductData($productData);
        return $this;
    }

    public function build(): Product
    {
        return $this->product;
    }
}