<?php
//
//
//class FizzBuzzServiceTest extends \Codeception\TestCase\Test
//{
//   /**
//    * @var \UnitTester
//    */
//    protected $tester;
//
//    /**
//     * @var \A6\CodeceptIsAwesomeBundle\Service\FizzBuzzService
//     */
//    private $service;
//
//    protected function _before()
//    {
//        $this->service = $this->tester->grabServiceFromContainer('a6_codecept_is_awesome.service.fizz_buzz');
//    }
//
//    protected function _after()
//    {
//    }
//
//    public function testMultipleOfThreeReturnsFizz()
//    {
//        $this->assertEquals('Fizz', $this->service->getResult(3));
//    }
//
//    public function testMultipleOfFiveReturnsBuzz()
//    {
//        $this->assertEquals('Buzz', $this->service->getResult(5));
//    }
//
//    public function testMultipleOfBothThreeAndFiveReturnsFizzBuzz()
//    {
//        $this->assertEquals('FizzBuzz', $this->service->getResult(15));
//    }
//
//    /**
//     * @dataProvider providerNoneMultipleReturnsOriginalNumber
//     */
//    public function testNoneMultipleReturnsOriginalNumber($value)
//    {
//        $this->assertEquals(4, $this->service->getResult(4));
//    }
//
//    public function providerNoneMultipleReturnsOriginalNumber()
//    {
//        return array(
//            array(4),
//            array(8),
//            array(61)
//        );
//    }
//
//    public function testDoFizzBuzzer()
//    {
//        $expected = array(8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz', 16, 17);
//
//        $this->assertEquals($expected, $this->service->doFizzBuzzer(8, 17));
//    }
//}