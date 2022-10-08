<?php

  use PHPUnit\Framework\TestCase;
  include 'C:\xampp\400004095\app\View.php';

  class ViewClassTest extends TestCase
  {

    /** @test */
    public function testValidObject()
    {
        $validObject = new View();
        $this->assertTrue(is_a($validObject, 'View'));
    }

    // public function testInvalidParameters()
    // {
    //   $test = new View();
    //   $this->expectException('\\Exception');
    //
    //   $value = 1;
    //   $test->setTemplate($value);
    // }

    // public function testSetTemplateMethod()
    // {
    //
    // }
    // public function testDisplayMethod()
    // {
    //
    // }
    // public function testAddVarMethod()
    // {
    //
    // }
  }
