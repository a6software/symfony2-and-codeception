<?php


class ReverseServiceTest extends \Codeception\TestCase\Test
{
   /**
    * @var \UnitTester
    */
    protected $tester;

    private $service;

    protected function _before()
    {
        $this->service = new \A6\CodeceptIsAwesomeBundle\Service\ReverseStringService();
    }

    protected function _after()
    {
    }

//    /**
//     * @dataProvider ourProvider
//     */
//    public function testStringIsReversedAsExpected($originalString, $expectedString)
//    {
//        $this->assertEquals(
//            $expectedString,
//            $this->service->reverse($originalString)
//        );
//    }
//
//    public function ourProvider()
//    {
//        return array(
//            array('abc', 'cba'),
//            array('qaz', 'zaq'),
//            array('123', '321'),
//        );
//    }
}