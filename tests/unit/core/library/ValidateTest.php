<?php

use core\exceptions\InvalidEmailException;
use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
    public function test_required()
    {
        // Arrange
        $validate = new Validate;

        // Act
        $validated = $validate->required();

        // Assert
        $this->assertArrayHasKey('firstName', ['firstName' => 'Eduardo']);
    }

    public function test_valid_email()
    {
        // Arrange
        $validate = new Validate;

        // Assert
        $this->expectException(InvalidEmailException::class);

        // Act
        $validate->email();
    }
}
