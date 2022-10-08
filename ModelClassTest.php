<?php

  use PHPUnit\Framework\TestCase;

  include 'C:\xampp\400004095\app\ModelSub.php';

  class ModelClassTest extends TestCase
  {
    /** @test */
    public function testValidObject()
    {

        $test = new ModelSub();
        $this->assertIsObject($test);

    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidParameters()
      {
        $var = 1;
        $this->expectException(\InvalidArgumentException::class);
        $test->getRecord($var);


      }

      // public function testOutput()
      // {
      //
      // }
      //
      // public function testGetAllMethod()
      // {
      //
      // }
      //
      // public funtion testGetRecord()
      // {
      //
      // }

  }
