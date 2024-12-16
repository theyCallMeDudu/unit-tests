<?php

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    private Auth $auth;

    public function setUp(): void
    {
        // Arrange
        $this->auth = new Auth;
        echo 'Setting up...' . PHP_EOL;
    }

    public function test_attempt_auth()
    {    
        // Act
        $authenticated = $this->auth->attempt();

        echo 'Executing attemp auth test...' . PHP_EOL;

        // Assert
        $this->assertTrue($authenticated);
    }

    public function test_attempt_logout()
    {
        // Act
        $authenticated = !$this->auth->attempt();

        echo 'Executing attemp logout test...' . PHP_EOL;

        // Assert
        $this->assertFalse($authenticated);
    }

    public function tearDown(): void
    {
        echo 'Tearing down...' . PHP_EOL;
    }
}
