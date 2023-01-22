<?php

namespace common\components;

use common\enums\UserStatusEnums;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;
use Yii;

final class UserIdentity extends Model implements IdentityInterface
{
    public static function tableName()
    {
        return 'users';
    }

    public function validatePassword($password): bool
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public static function findIdentity($id): UserIdentity
    {
        return UserIdentity::findOne(['id' => $id, 'status' => UserStatusEnums::USER_ACTIVE->value]);
    }

    public static function findIdentityByAccessToken($token, $type = null): ?IdentityInterface
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public function getId(): int
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey(): string
    {
        return '';
    }

    public function validateAuthKey($authKey): bool
    {
        return $this->getAuthKey() === $authKey;
    }
}
