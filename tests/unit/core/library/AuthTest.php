<?php

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function test_login()
    {
        $auth = new Auth;
        $result = $auth->attempt();

        $this->assertTrue($result);
    }
}
