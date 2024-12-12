<?php

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
    public function test_required()
    {
        $this->assertTrue(true);
    }

    public function test_valid_email()
    {
        $validate = new Validate;
        $validated = $validate->required();

        $this->assertTrue($validated);
    }
}
