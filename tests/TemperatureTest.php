<?php

use Aymanalhattami\UnitConversion\Temperature;

it('can convert celicius to fahrenheit', function () {
    $fahrenheit = Temperature::fromCelicius(100)->toFahrenheit();

    $this->assertEquals(212, $fahrenheit);
});
