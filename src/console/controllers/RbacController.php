<?php

namespace console\controllers;

use common\repositories\UsersRepositoryInterface;
use yii\console\Controller;
use Yii;

final class RbacController extends Controller
{
    public function actionInit(): void
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAll();

        $operation = $auth->createRole(UserRole::OPERATION->value);
        $operation->description = UserRole::OPERATION->name;
        $auth->add($operation);

        $analyst = $auth->createRole(UserRole::ANALYST->value);
        $analyst->description = UserRole::ANALYST->name;
        $auth->add($analyst);

        $admin = $auth->createRole(UserRole::ADMIN->value);
        $admin->description = UserRole::ADMIN->name;
        $auth->add($admin);

        $permission = $auth->createPermission(UserPermission::MANAGE_USERS->value);
        $permission->description = UserPermission::MANAGE_USERS->name;
        $auth->add($permission);
        $auth->addChild($admin, $permission);

        $permission = $auth->createPermission(UserPermission::MANAGE_PHONE_NUMBERS->value);
        $permission->description = UserPermission::MANAGE_PHONE_NUMBERS->name;
        $auth->add($permission);
        $auth->addChild($admin, $permission);

        $permission = $auth->createPermission(UserPermission::VIEW_CAMPAIGNS->value);
        $permission->description = UserPermission::VIEW_CAMPAIGNS->name;
        $auth->add($permission);
        $auth->addChild($admin, $permission);
        $auth->addChild($operation, $permission);
        $auth->addChild($analyst, $permission);

        $permission = $auth->createPermission(UserPermission::MANAGE_CAMPAIGNS->value);
        $permission->description = UserPermission::MANAGE_CAMPAIGNS->name;
        $auth->add($permission);
        $auth->addChild($admin, $permission);
        $auth->addChild($operation, $permission);
    }

    public function actionAssign(UsersRepositoryInterface $usersRepository): void
    {
        $auth = Yii::$app->getAuthManager();

        $users = $usersRepository->findAll();
        foreach ($users as $user) {
            $role = $auth->getRole($user->role);
            $roles = $auth->getRolesByUser($user->id);

            if ($role && !in_array($role, $roles)) {
                $auth->assign($role, $user->id);
            }
        }
    }
}