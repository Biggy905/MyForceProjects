<?php

namespace console\controllers;

use common\enums\UsersPermissionsEnums;
use common\enums\UsersRolesEnums;
use common\repositories\UsersRepositoryInterface;
use yii\console\Controller;
use Yii;

final class RbacController extends Controller
{
    public function actionInit(): void
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAll();

        $admin = $auth->createRole(UsersRolesEnums::ROLE_ADMIN->value);
        $admin->description = UsersRolesEnums::ROLE_ADMIN->name;
        $auth->add($admin);

        $user = $auth->createRole(UsersRolesEnums::ROLE_USER->value);
        $user->description = UsersRolesEnums::ROLE_USER->name;
        $auth->add($user);

        $permission = $auth->createPermission(UsersPermissionsEnums::MANAGER_ADMIN->value);
        $permission->description = UsersPermissionsEnums::MANAGER_ADMIN->name;
        $auth->add($permission);
        $auth->addChild($admin, $permission);

        $permission = $auth->createPermission(UsersPermissionsEnums::MANAGER_USER->value);
        $permission->description = UsersPermissionsEnums::MANAGER_USER->name;
        $auth->add($permission);
        $auth->addChild($user, $permission);
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
