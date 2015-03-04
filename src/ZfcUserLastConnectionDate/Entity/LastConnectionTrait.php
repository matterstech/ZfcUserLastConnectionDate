<?php
    /**
     * Created by PhpStorm.
     * User: mohamed.benaida
     * Date: 3/3/15
     * Time: 11:12 AM
     */

namespace ZfcUserLastConnectionDate\Entity;

trait LastConnectionTrait {

    /**
     * @var \DateTime
     */
    private $lastConnectionDate;
    /**
     * @return mixed
     */
    public function getLastConnectionDate()
    {
        return $this->lastConnectionDate;
    }

    /**
     * @param \DateTime $lastConnectionDate
     */
    public function setLastConnectionDate($lastConnectionDate)
    {
        $this->lastConnectionDate = $lastConnectionDate;
    }

}