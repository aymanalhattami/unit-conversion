<?php

use Aymanalhattami\UnitConversion\Weight;

it('can convert kilometer to lbs', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();

    $this->assertEquals(220.4623, $lbs);
});
