<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/3/15
 * Time: 2:15 PM
 */
namespace LastConnectionDate\Service;

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

    public function setUp(){

        $this->instance = new UpdateDate();
        $this->zfcMapper = $this->getMock('\LastConnectionDate\Service\UpdateDate');
    }

    /**
     * @expectedException \RunTimeException
     */
    public function testExceptionMapper(){

        $this->instance->updateDateFromIdUser('hello', 'world');
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testExceptionUserId(){
        $this->instance->updateDateFromIdUser('dummy param', $this->zfcMapper);
    }




}