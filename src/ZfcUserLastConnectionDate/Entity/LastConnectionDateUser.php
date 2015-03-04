<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/2/15
 * Time: 6:21 PM
 */
namespace ZfcUserLastConnectionDate\Entity;

use ZfcUser\Entity\User as ZfcUser;

class LastConnectionDateUser extends ZfcUser {

use LastConnectionTrait;

}