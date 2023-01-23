<?php

namespace common\queries;

use common\components\db\DeleteTrait;
use common\components\db\FindTrait;
use common\entities\News as NewsEntity;
use common\enums\NewsStatusEnums;
use yii\db\ActiveQuery;

final class NewsQuery extends ActiveQuery
{
    use FindTrait, DeleteTrait;

    public function byId(string $id): self
    {
        return $this->andWhere([NewsEntity::tableName() . '.id' => $id]);
    }

    public function active(): self
    {
        return $this->andWhere([NewsEntity::tableName() . '.status' => NewsStatusEnums::NEWS_ACTIVE->value]);
    }

    public function nonActive(): self
    {
        return $this->andWhere([NewsEntity::tableName() . '.status' => NewsStatusEnums::NEWS_NON_ACTIVE->value]);
    }

    public function blocking(): self
    {
        return $this->andWhere([NewsEntity::tableName() . '.status' => NewsStatusEnums::NEWS_BLOCKING->value]);
    }

    public function blacklist(): self
    {
        return $this->andWhere([NewsEntity::tableName() . '.status' => NewsStatusEnums::NEWS_NON_ACTIVE->value])
            ->andWhere([NewsEntity::tableName() . '.status' => NewsStatusEnums::NEWS_BLOCKING->value]);
    }

    public function filter($filter): self
    {
        return $this->andWhere([])
            ->orderBy('DESC')
            ->limit($filter['filter'])
            ->limit($filter['limit']);
    }
}
