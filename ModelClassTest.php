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
        //$this->expectException(\InvalidArgumentException::class);
        $test = $this->createMock('Model', 'getRecord');
        $test->expects($this->once())
                 ->method('getRecord')
                 ->with($var);


        $value = 1;
        $test->getRecord($value);
        //$test->getRecord($var);

        // $rc = new ReflectionMethod("Model", "getAll");

        // $this->assertSame(0, $rc->getNumberOfParameters());

        // $rc2 = new ReflectionParameter("getRecord","id");

        // $this->assertSame("string", $rc2->getType()->toString());


          //$this->expectExceptionMessage('Wrong DataType');


        // Function\expect('getRecord')
        //   ->once()
        //   ->with(Mockery::type('string'));

         // $test = new ModelSub();
         // $this->expectException(\InvalidArgumentException::class);
         // $value = 1;
         // $test->getRecord($value);

         // try {
         //   $value = 1;
         //    $test->getRecord($value);
         //    $this->assertFalse(is_string($value), "Argument is not a String");
         // } catch (Exception $e) {
         //    $this->assertSame('InvalidArgumentException', $e);
         // }

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
