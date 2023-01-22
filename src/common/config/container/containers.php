<?php

use yii\di\Container;

return [
    //
    common\components\rbac\RbacManager::class => common\components\rbac\RbacManager::class,

    // Forms
    common\components\forms\FormsInterface::class => common\components\forms\AbstractForm::class,

    // Services
    common\components\services\ServicesInterface::class => common\components\services\ServicesInterface::class,

    // Repository
    common\repositories\NewsRepositoryInterface::class => common\repositories\databases\NewsRepository::class,
    common\repositories\NewsCategoriesRepositoryInterface::class => common\repositories\databases\NewsCategoriesRepository::class,
    common\repositories\UsersRepositoryInterface::class => common\repositories\databases\UsersRepository::class,

//    // Validator
//    common\components\Validator::class => function () {
//
//    },
];
