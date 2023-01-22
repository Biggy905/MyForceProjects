<?php

namespace common\repositories;

use common\entities\User;

interface UsersRepositoryInterface
{
    public function findOneActive(string $id): ?User;

    public function findAll(): array;

    public function create(User $user): void;

    public function delete(User $user): void;
}
