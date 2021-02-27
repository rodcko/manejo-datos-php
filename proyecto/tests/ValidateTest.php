<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
  public function test_email()
  {
    $email = Validate::email('rodcko@rodcko.com');
    $this->assertTrue($email);

    $email = Validate::email('rodcko@@rodcko.com');
    $this->assertFalse($email);
  }

  public function test_url()
  {
    $url = Validate::url('http://platzi.com');
    $this->assertTrue($url);

    $url = Validate::url('//platzi.com');
    $this->assertFalse($url);

  }

  public function test_password()
  {
    $password = Validate::password('Abc1234VS');
    $this->assertTrue($password);

    $password = Validate::password('xxx');
    $this->assertFalse($password);
  }
}