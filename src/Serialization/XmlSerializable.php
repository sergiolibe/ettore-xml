<?php
declare(strict_types=1);

namespace Ettore\Serialization;


interface XmlSerializable
{
    public function xmlSerialize(bool $prettyXml = false): string;
}