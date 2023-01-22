<?php

namespace common\repositories\databases;

use common\entities\News;
use common\repositories\NewsRepositoryInterface;
use Symfony\Component\Mime\Exception\LogicException;

final class NewsRepository extends AbstractRepository implements NewsRepositoryInterface
{
    public function findOneActive(string $id): ?News
    {
        $query = News::find()->active()->byId();

        return $query->one();
    }

    public function findAll(): array
    {
        $query = News::find()->active();

        return $query->all();
    }

    public function create(News $user): void
    {
        if (!$user->save()) {
            throw new LogicException('Cannot create users');
        }
    }

    public function delete(News $user): void
    {
        $user->delete();
    }
}