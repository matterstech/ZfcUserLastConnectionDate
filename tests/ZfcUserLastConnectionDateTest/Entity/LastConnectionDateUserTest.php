<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/3/15
 * Time: 5:17 PM
 */
namespace ZfcUserLastConnectionDate\Entity;
use PHPUnit_Framework_TestCase;
use ZfcUserLastConnectionDate\Test\UserUsingTraitAndInterface;
use ZfcUserLastConnectionDate\Entity\LastConnectionDateSettableInterface;

class LastConnectionDateUserTest extends PHPUnit_Framework_TestCase {

    protected $instance;

    public function setUp()
    {
    }

    public function userInstanceDataProvider()
    {
        return array(
            array(new LastConnectionDateUser()),
            array(new UserUsingTraitAndInterface()),
        );
    }

    /**
     * @dataProvider userInstanceDataProvider
     * @covers LastConnectionDate\Entity\User::setLastConnectionDate
     * @covers LastConnectionDate\Entity\User::getLastConnectionDate
     */
    public function testSetGetState($instance)
    {
        $date = new \DateTime('NOW');
        $date->format(\DateTime::ISO8601);

        $instance->setLastConnectionDate($date);
        $this->assertEquals($date, $instance->getLastConnectionDate());
    }

    /**
     * @dataProvider userInstanceDataProvider
     * @covers LastConnectionDate\Entity\User::setLastConnectionDate
     * @covers LastConnectionDate\Entity\User::getLastConnectionDate
     */
    public function testInstanceOf($instance)
    {
        $this->assertTrue($instance instanceof LastConnectionDateSettableInterface);
    }

}