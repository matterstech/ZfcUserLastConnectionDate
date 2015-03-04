<?php
/**
 * Created by PhpStorm.
 * User: mohamed.benaida
 * Date: 3/2/15
 * Time: 7:03 PM
 */
namespace ZfcUserLastConnectionDate\Service;
use ZfcUserLastConnectionDate\Entity\LastConnectionDateUser;
use ZfcUserAdmin\Mapper\UserZendDb;

class UpdateDate {
    /**
     * @param $userId Integer
     * @param $zfcMapper
     * @return bool
     * @throws \Exception
     */
    public function updateDateFromIdUser($userId, $zfcMapper) {

        if (!$zfcMapper instanceof UserZendDb) {
            throw new \RuntimeException('Invalid Mapper passed to lastConnectionDate update service');
        }
        if (!$userId ||  !is_int($userId)) {
            throw new \RuntimeException('Invalid userId passed to lastConnectionDate update service');
        }

        /**
         * @var $user \LastConnectionDate\Entity\User
         */
        $user = $zfcMapper->findById($userId);

        if ($user instanceof LastConnectionDateUser) {
            $dateTime = new \DateTime('NOW');
            $lastDate = $dateTime->format(\DateTime::ISO8601);
            $user->setLastConnectionDate($lastDate);
            $zfcMapper->Update($user);
            return true;
        }
        return false;
    }
}