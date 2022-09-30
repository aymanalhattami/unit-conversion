<?php

use Aymanalhattami\UnitConversion\Weight;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can convert kilometer to lbs', function () {
    $lbs = Weight::fromKilograms(100)->toLbs();

    $this->assertEquals(2220.4623, $lbs);
});
