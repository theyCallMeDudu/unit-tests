<?php

namespace tests\unit\core\library\tdd;

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateRequiredTest extends TestCase
{
    public function test_required_validate()
    {
        // Arrange
        $validate = new Validate;
        
        // Act
        $validate->required('firstName', 'First name is required');
        $validate->required('lastName', 'Last name is required');

        // Assert
        $this->assertArrayHasKey('firstName', $validate->get_errors());
        $this->assertArrayHasKey('lastName', $validate->get_errors());
    }
}