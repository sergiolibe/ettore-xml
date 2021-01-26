<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


use Ettore\Serialization\XmlSerializable;
use Ettore\Serialization\XmlSerializableTrait;
use JsonSerializable;

class Product implements JsonSerializable, XmlSerializable
{
    use XmlSerializableTrait;

    private ?string $sellerSku = null;
    private ?string $parentSku = null;
    private ?string $name = null;
    private ?int $primaryCategory = null;
    private ?string $description = null;
    private ?string $brand = null;
    private ?float $price = null;
    private ?string $productId = null;
    private ?ProductData $productData = null;

    public function jsonSerialize(): array
    {
        return [
            "SellerSku" => (string)$this->sellerSku,
            "ParentSku" => (string)$this->parentSku,
            "Name" => (string)$this->name,
            "PrimaryCategory" => (int)$this->primaryCategory,
            "Description" => (string)$this->description,
            "Brand" => (string)$this->brand,
            "Price" => (float)$this->price,
            "ProductId" => (string)$this->productId,
            "ProductData" => $this->productData,
        ];
    }

    public function xmlSerialize(bool $prettyXml = false): string
    {
        return $this->xmlSerializeContent($prettyXml);
    }

    public function xmlTag(): string
    {
        return 'Product';
    }

    public static function builder(): ProductBuilder
    {
        $builder = new ProductBuilder();
        $builder->createProduct();
        return $builder;
    }

    public function setSellerSku(string $sellerSku): void
    {
        $this->sellerSku = $sellerSku;
    }

    public function setParentSku(string $parentSku): void
    {
        $this->parentSku = $parentSku;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setPrimaryCategory(int $primaryCategory): void
    {
        $this->primaryCategory = $primaryCategory;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setProductId(string $productId): void
    {
        $this->productId = $productId;
    }

    public function setProductData(?ProductData $productData): void
    {
        $this->productData = $productData;
    }
}