<?php

namespace core\library;

use core\exceptions\InvalidEmailException;
use Exception;

class Validate
{
    private array $errors;

    public function required(string $fieldName, string $message = 'Field required')
    {
        $this->errors[$fieldName] = $message;

    }

    public function get_errors(): array
    {
        return $this->errors;
    }

    public function email()
    {
        $email = 'educoelhogmail.com';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException('This e-mail is invalid!');
        }
    }
}
