<?php

use yii\di\Container;

$container = require (__DIR__ . '/container/containers.php');

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
            'class' => 'common\components\rbac\RbacManager',
        ],
        'db' => require 'db.php',
    ],
    'container' => [
        'singletons' => $container,
        'definitions' => [],
    ],
];
