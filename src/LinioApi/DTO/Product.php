<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


/**
 * @method void setSellerSku(?string $sellerSku)
 * @method void setParentSku(?string $parentSku)
 * @method void setName(?string $name)
 * @method void setPrimaryCategory(?int $primaryCategory)
 * @method void setDescription(?string $description)
 * @method void setBrand(?string $brand)
 * @method void setPrice(?float $price)
 * @method void setProductId(?string $productId)
 * @method void setProductData(?ProductData $productData)
 * @method static ProductBuilder builder()
 */
class Product extends XmlEntity
{
    protected ?string $sellerSku = null;
    protected ?string $parentSku = null;
    protected ?string $name = null;
    protected ?int $primaryCategory = null;
    protected ?string $description = null;
    protected ?string $brand = null;
    protected ?float $price = null;
    protected ?string $productId = null;
    protected ?ProductData $productData = null;

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
}