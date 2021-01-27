<?php
declare(strict_types=1);

namespace Ettore\LinioApi\DTO;


trait BuilderTrait
{
    private object $instance;

    abstract public function createInstance(): self;

    public function build(): object
    {
        return $this->instance;
    }

    public function __call($name, $arguments): self
    {
        $functionName = 'set' . $name;
        $this->instance->$functionName($arguments[0]);
        return $this;
    }
}