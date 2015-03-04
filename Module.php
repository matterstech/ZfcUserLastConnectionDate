<?php
namespace LastConnectionDate;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function onBootstrap($e)
    {
        $events = $e->getApplication()->getEventManager()->getSharedManager();
        $sm = $e->getApplication()->getServiceManager();


        $events->attach('ZfcUser\Authentication\Adapter\AdapterChain', 'authenticate.success', function($e) use($sm) {
            $userId = $e->getIdentity();
            if ($userId) {
                $zfcMapper = $sm->get('zfcuser_user_mapper');
                $updateDateService = $sm->get('last_connection_date_updateDate_service');
                $isUpdatedDate = $updateDateService->updateDateFromIdUser($userId, $zfcMapper);
            }
        });

    }
}
