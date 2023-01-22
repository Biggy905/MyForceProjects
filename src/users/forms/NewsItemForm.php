<?php

namespace users\forms;

use common\components\forms\AbstractForm;

final class NewsItemForm extends AbstractForm
{
    public string $id;


    public function rules(): array
    {
        return [
            [
                ['id'],
                'trim',
            ],
            [
                ['id'],
                'string',
            ],
            [
                ['id'],
                'required',
            ],
        ];
    }
}