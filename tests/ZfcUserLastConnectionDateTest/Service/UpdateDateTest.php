<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/3/15
 * Time: 2:15 PM
 */
namespace ZfcUserLastConnectionDate\Service;

class UpdateDateTest extends \PHPUnit_Framework_TestCase{

    /**
     * @var UpdateDateTest
     */
    private $instance;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     *
     */
    private $zfcMapper;

    public function setUp()
    {
        $this->instance = new UpdateDate();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testExceptionUserId()
    {
        $mock = $this->getMock('\ZfcUser\Mapper\User');
        $this->instance->updateDateFromIdUser('dummy param', $mock);
    }

    public function testNoExceptionMapperUsingInterface() 
    {
	$mock = $this->getMockBuilder('\ZfcUser\Mapper\UserInterface')
	    ->disableOriginalConstructor()
	    ->getMock();

        $this->assertFalse($this->instance->updateDateFromIdUser(1, $mock));
    }
}
