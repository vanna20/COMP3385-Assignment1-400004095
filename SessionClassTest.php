<?php
  use PHPUnit\Framework\TestCase;
  include 'C:\xampp\400004095\app\SessionClass.php';

  class SessionClassTest extends TestCase
  {

    /** @test */
    public function testSessionClassObject()
    {
      $sessionObj = new SessionClass();
      $this->assertTrue(is_a($sessionObj, 'SessionClass'));
    }

    // public function testInvalidParameters()
    // {
    //   $session = new SessionClass();
    //
    //   $this->expectException(\InvalidArgumentException::class);
    //   $value = 1;
    //   $this->add($value, $value);
    //
    //   // $addPar = $session->add('Becky', 5);
    //   // $this->assertSame(2, $addPar->getNumberOfParameters());
    //
    // }

    // public function testOutput()
    // {
    //
    // }
    //
    // public function testCreateMethod()
    // {
    //
    // }
    //
    // public function testDestroyMethod()
    // {
    //
    // }
    //
    // public function testAddMethod()
    // {
    //
    // }
    //
    // public function testRemoveMethod()
    // {
    //
    // }
    //
    // public function testAccessibleMethod()
    // {
    //
    // }
  }
