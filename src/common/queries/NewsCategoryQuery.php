<?php

namespace common\queries;

use common\components\db\DeleteTrait;
use common\components\db\FindTrait;
use common\entities\NewsCategory as NewsCategoryEntity;
use common\enums\UserStatusEnums;
use yii\db\ActiveQuery;

final class NewsCategoryQuery extends ActiveQuery
{
    use FindTrait, DeleteTrait;

    public function byId(string $id): self
    {
        return $this->andWhere([NewsCategoryEntity::tableName() . '.id' => $id]);
    }

    public function active(): self
    {
        return $this->andWhere([NewsCategoryEntity::tableName() . '.status' => UserStatusEnums::USER_ACTIVE->value]);
    }

    public function nonActive(): self
    {
        return $this->andWhere([NewsCategoryEntity::tableName() . '.status' => UserStatusEnums::USER_NON_ACTIVE]);
    }

    public function blocking(): self
    {
        return $this->andWhere([NewsCategoryEntity::tableName() . '.status' => UserStatusEnums::USER_BLOCKING]);
    }

    public function blacklist(): self
    {
        return $this->andWhere([NewsCategoryEntity::tableName() . '.status' => UserStatusEnums::USER_NON_ACTIVE])
            ->andWhere([NewsCategoryEntity::tableName() . '.status' => UserStatusEnums::USER_BLOCKING]);
    }
}
