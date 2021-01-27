<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


use Ettore\Serialization\XmlSerializable;
use Ettore\Serialization\XmlSerializableTrait;
use JsonSerializable;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

abstract class XmlEntity implements JsonSerializable, XmlSerializable
{
    use XmlSerializableTrait;


    public function xmlSerialize(bool $prettyXml = false): string
    {
        return $this->xmlSerializeContent($prettyXml);
    }

    public function xmlTag(): string
    {
        $path = explode('\\', static::class);
        return end($path);
    }

    public static function builder(): object
    {
        $className = static::class . 'Builder';
        try {
            $reflectionClass = new ReflectionClass($className);
            $reflectionInstance = $reflectionClass->newInstance();
            $reflectionInstance->createInstance();
            return $reflectionInstance;
        } catch (ReflectionException $e) {
            throw new RuntimeException($e->getMessage());
        }
    }

    public function __call($name, $arguments): void
    {
        $propertyName = explode('set', $name)[1];
        $this->$propertyName = $arguments[0];
    }
}