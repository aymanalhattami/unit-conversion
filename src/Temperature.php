<?php

namespace Aymanalhattami\UnitConversion;

class Temperature
{
    private $celicius;

    public function __construct(float $celicius)
    {
        $this->celicius = $celicius;
    }

    public static function fromCelicius(float $celicius): self
    {
        return new static($celicius);
    }

    public function toFahrenheit(): float
    {
        return ($this->celicius * 1.8) + 32;
    }
}
