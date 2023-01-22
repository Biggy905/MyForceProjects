<?php

namespace users\forms;

use common\components\forms\AbstractForm;

final class RegistrationForm extends AbstractForm
{
    public string $username;
    public string $password;
    public string $repeatPassword;

    public function rules(): array
    {
        return [
            [
                ['username', 'password', 'repeatPassword'],
                'trim',
            ],
            [
                ['username', 'password', 'repeatPassword'],
                'string',
            ],
            [
                ['username', 'password', 'repeatPassword'],
                'required',
            ],
            [
                'password',
                'compare',
                'compareAttribute' => 'repeatPassword',
            ],
        ];
    }
}