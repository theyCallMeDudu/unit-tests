<?php

namespace core\library;

use core\exceptions\InvalidEmailException;
use Exception;

class Validate
{
    public function required()
    {
        return true;
    }

    public function email()
    {
        $email = 'educoelhogmail.com';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException('This e-mail is invalid!');
        }
    }
}
