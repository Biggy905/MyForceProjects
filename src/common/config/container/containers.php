<?php

use yii\di\Container;

return [
    //
    common\components\rbac\RbacManager::class => common\components\rbac\RbacManager::class,
    // Services

    // Repository
    common\repositories\NewsRepositoryInterface::class => common\repositories\databases\NewsRepository::class,
    common\repositories\NewsCategoriesRepositoryInterface::class => common\repositories\databases\NewsCategoriesRepository::class,
    common\repositories\UsersRepositoryInterface::class => common\repositories\databases\UsersRepository::class,
];
