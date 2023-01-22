<?php

use yii\di\Container;

return [
    //
    \common\components\rbac\RbacManager::class => \common\components\rbac\RbacManager::class,
//    \common\components\db\ConnectDb::class => static function () {
//        return new \common\components\db\ConnectDb([
//            'dsn' => 'pgsql:host=' . getenv('DB_HOSTNAME')
//                . ';port=' . getenv('DB_PORT')
//                . ';dbname=' . getenv('DB_DATABASE'),
//            'username' => getenv('DB_USERNAME'),
//            'password' => getenv('DB_PASSWORD'),
//            'charset' => 'utf8',
//            'enableSchemaCache' => true,
//            'schemaCacheDuration' => 3600,
//            'schemaCache' => 'cache',
//            'schemaMap' => [
//                'pgsql' => [
//                    'class' => \yii\db\pgsql\Schema::class,
//                    'defaultSchema' => 'public',
//                ],
//            ],
//            'on afterOpen' => static function (\yii\base\Event $event) {
//                $event->sender->createCommand("SET time zone 'UTC'")->execute();
//            },
//            'attributes' => [
//                PDO::ATTR_PERSISTENT => getenv('DB_PERSISTENT') ?? true,
//            ],
//        ]);
//    },

    // Forms
//    \common\components\forms\FormsInterface::class => \common\components\forms\AbstractForm::class,
//    \users\forms\NewsItemForm::class => \users\forms\NewsItemForm::class,

    // Services
    \common\components\services\ServicesInterface::class => \common\components\services\ServicesInterface::class,

    // Repository
    \common\repositories\NewsRepositoryInterface::class => \common\repositories\databases\NewsRepository::class,
    \common\repositories\NewsCategoriesRepositoryInterface::class => \common\repositories\databases\NewsCategoriesRepository::class,
    \common\repositories\UsersRepositoryInterface::class => \common\repositories\databases\UsersRepository::class,

//    // Validator
//    common\components\Validator::class => function () {
//
//    },
];
