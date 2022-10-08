<?php

  use PHPUnit\Framework\TestCase;

  include 'C:\xampp\400004095\app\IndexController.php';

  class ControllerClassTest extends TestCase
  {
    /** @test */
    public function testValidObject()
    {

        $test = new IndexController();
        $this->assertIsObject($test);

    }
  }
