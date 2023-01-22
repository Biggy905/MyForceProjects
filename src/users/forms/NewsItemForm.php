<?php

namespace users\forms;

use common\components\forms\AbstractForms;

final class NewsItemForm extends AbstractForms
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