<?php

namespace common\components\forms;

use ReflectionClass;
use ReflectionProperty;

abstract class AbstractForms implements FormsInterface
{
    public function setAttributes(array $attributes = []): void
    {
        foreach ($attributes as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
    }

    public function getAttributes(): array
    {
        $reflectionClass = new ReflectionClass($this);

        $attributes = [];
        foreach ($reflectionClass->getProperties(ReflectionProperty::IS_PUBLIC) as $name) {
            $property = $name->getName();
            $attributes[$property] = $this->{$property};
        }

        return $attributes;
    }
}