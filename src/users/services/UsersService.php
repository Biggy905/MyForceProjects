<?php

namespace users\services;

use common\components\services\AbstractServices;

final class UsersService extends AbstractServices
{

    private function groups()
    {

    }

    public function response($data): self
    {
        return $data;
    }
}