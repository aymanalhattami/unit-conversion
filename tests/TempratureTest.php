<?php

use Aymanalhattami\UnitConversion\Temprature;

it('can convert celicius to fahrenheit', function () {
    $fahrenheit = Temprature::fromCelicius(100)->toFahrenheit();

    $this->assertEquals(212, $fahrenheit);
});
