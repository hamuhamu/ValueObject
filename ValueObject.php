<?php

abstract class ValueObject
{
    public function __construct(array $params)
    {
        foreach($params as $propertyName => $value) {
            $this->$propertyName = $value;
        }
    }

    public function __get($propertyName)
    {
        if (!property_exists(get_class($this), $propertyName)) {
            throw new Exception(sprintf('undefined property %s', $propertyName));
        }

        return $this->$propertyName;
    }
}
