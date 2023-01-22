<?php

namespace common\queries;

use common\entities\User;
use common\enums\UserStatusEnums;
use yii\db\ActiveQuery;

final class News extends ActiveQuery
{
    public function byId(string $id): self
    {
        return $this->andWhere([User::tableName() . 'id' => $id]);
    }

    public function active(): self
    {
        return $this->andWhere([User::tableName() . 'status' => UserStatusEnums::USER_ACTIVE->value]);
    }

    public function nonActive(): self
    {
        return $this->andWhere([User::tableName() . 'status' => UserStatusEnums::USER_NON_ACTIVE]);
    }

    public function blocking(): self
    {
        return $this->andWhere([User::tableName() . 'status' => UserStatusEnums::USER_BLOCKING]);
    }

    public function blacklist(): self
    {
        return $this->andWhere([User::tableName() . 'status' => UserStatusEnums::USER_NON_ACTIVE])
            ->andWhere([User::tableName() . 'status' => UserStatusEnums::USER_BLOCKING]);
    }
}
