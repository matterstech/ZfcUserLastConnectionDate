<?php
    /**
     * Created by PhpStorm.
     * User: mohamed.benaida
     * Date: 3/3/15
     * Time: 11:12 AM
     */

namespace ZfcUserLastConnectionDate\Entity;

interface LastConnectionDateSettableInterface
{

    /**
     * Sets the last connection date
     * @param \DateTime $lastConnectionDate
     */
    public function setLastConnectionDate($lastConnectionDate);

}