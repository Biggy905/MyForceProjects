<?php

namespace common\repositories\databases;

use common\entities\User;
use common\repositories\UsersRepositoryInterface;
use Symfony\Component\Mime\Exception\LogicException;

final class UsersRepository extends AbstractRepository implements UsersRepositoryInterface
{
    public function findOneActive(string $id): ?User
    {
        $query = User::find()->active()->byId();

        return $query->one();
    }

    public function findAll(): array
    {
        $query = User::find()->active();

        return $query;
    }

    public function create(User $user): void
    {
        if (!$user->save()) {
            throw new LogicException('Cannot create users');
        }
    }

    public function delete(User $user): void
    {
        $user->softDelete();
    }
}