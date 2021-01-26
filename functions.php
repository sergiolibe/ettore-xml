<?php
declare(strict_types=1);

use Ettore\Serialization\XmlSerializable;
use Ettore\Serialization\XmlUtils;

function dd($data): void
{
    var_dump($data);
    die();
}

function ejd($data): void
{
    header('Content-Type:application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    die();
}

function e_xml_d(XmlSerializable $data, $prettyXml = false): void
{
    header('Content-Type:application/xml');
    echo XmlUtils::renderRootXml($data->xmlSerialize($prettyXml));
    die();
}