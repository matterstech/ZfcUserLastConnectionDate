<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/3/15
 * Time: 5:17 PM
 */
namespace ZfcUserLastConnectionDate\Entity;
use PHPUnit_Framework_TestCase;

class LastConnectionDateUserTest extends PHPUnit_Framework_TestCase {

    protected $instance;

    public function setUp()
    {
        $instance = new LastConnectionDateUser();
        $this->instance = $instance;
    }

    /**
     * @covers LastConnectionDate\Entity\User::setLastConnectionDate
     * @covers LastConnectionDate\Entity\User::getLastConnectionDate
     */
    public function testSetGetState()
    {
        $date = new \DateTime('NOW');
        $date->format(\DateTime::ISO8601);

        $this->instance->setLastConnectionDate($date);
        $this->assertEquals($date, $this->instance->getLastConnectionDate());
    }

}