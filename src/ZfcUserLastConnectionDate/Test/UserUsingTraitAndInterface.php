<?php
/**
 * Created by PhpStorm.
 * User: inovia
 * Date: 3/5/15
 * Time: 2:46 PM
 */

namespace ZfcUserLastConnectionDate\Test;


use ZfcUserLastConnectionDate\Entity\LastConnectionDateSettableInterface;
use ZfcUserLastConnectionDate\Entity\LastConnectionDateTrait;

class UserUsingTraitAndInterface implements LastConnectionDateSettableInterface {

    use LastConnectionDateTrait;

} 