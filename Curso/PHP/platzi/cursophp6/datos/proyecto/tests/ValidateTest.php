<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{

    public function test_email(){
        $email = Validate::correo('santiago@pereira.com');
        $this->assertTrue($email);
    }
}