<?php
declare(strict_types=1);

use Ettore\LinioApi\DTO\Product;
use Ettore\LinioApi\DTO\ProductBuilder;
use Ettore\LinioApi\DTO\ProductData;

include __DIR__ . '/../bootstrap.php';


$productData = ProductData::builder()
    ->conditionType('Nuevo')
    ->shortDescription('Some short description')
    ->packageHeight(1)
    ->packageWeight(1)
    ->packageWidth(1)
    ->packageLength(1)
    ->build();

$product = Product::builder()
    ->sellerSku('410538217aaee4')
//    ->parentSku('')
    ->name('Lorem ipsum dolor sit amet')
    ->primaryCategory(10249)
    ->description('Lorem ipsum dolor sit amet')
    ->brand('Cree')
    ->price(200.0)
    ->productId('xyzabc')
    ->productData($productData)
    ->build();



$format = $_GET['format'] ?? 'json';

if ($format == 'raw')
    dd($product);
elseif ($format == 'json')
    ejd($product);
elseif ($format == 'xml')
    e_xml_d($product, true);
