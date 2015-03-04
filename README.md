# ZfcUserLastConnectionDate
[![Build Status](https://travis-ci.org/inovia-team/ZfcUserLastConnectionDate.svg)](https://travis-ci.org/inovia-team/ZfcUserLastConnectionDate)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/inovia-team/ZfcUserLastConnectionDate/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/inovia-team/ZfcUserLastConnectionDate/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/inovia-team/ZfcUserLastConnectionDate/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/inovia-team/ZfcUserLastConnectionDate/?branch=master)


Introduction
------------

ZfcUserLastConnectionDate is a ZF2 module providing an automatic update of user's last connection
date for each connection with ZfcUser.

For more informations about ZfcUser : [ZfcUser](https://github.com/ZF-Commons/ZfcUser)




Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [ZfcBase](https://github.com/ZF-Commons/ZfcBase) (latest master).
* [ZfcUser](https://github.com/ZF-Commons/ZfcUser)
* PHP version >= 5.4

Installation
------------

### Get the module

#### With composer

1. Add this project and in your composer.json:

    ```json
    "require": {
        "inovia-team/zfc-user-last-connection-date": "dev-master"
    }
    ```

2. Run the command:

    ```bash
    $ php composer.phar update
    ```

#### Module Activation

In your `application.config.php`file :

```php
return array(
    'modules' => array(
        // ...
        'ZfcUserLastConnectionDate',
    ),
        // ...
);
```



Update Your Model:

By Extending ZfcUserLastConnectionDate User entity:
```php
use ZfcUserLastConnectionDate\Entity\LastConnectionDateUser;
class User extends LastConnectionDateUser
{

}
```
OR if you don't want to extends it you can use the Trait :


```php
use ZfcUserLastConnectionDate\Entity\LastConnectionTrait;
class User extends ZfcUser
{
    use LastConnectionTrait;
}
```


Update Your database schema:

There are some SQL example in  `./vendor/inovia-team/zfc-user-last-connection-date/data/`



Navigate to http://yourproject/user/login.

Configuration
-----------------------
There is nothing to configure !