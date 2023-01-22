<?php

namespace users\services;

use common\components\services\AbstractServices;
use common\repositories\databases\NewsRepository;
use users\forms\NewsItemForm;

final class NewsService extends AbstractServices
{
    public function list(): array
    {
        $repository = new NewsRepository();

        return $repository->findAll();
    }

    public function item(NewsItemForm $form)
    {
        $repository = new NewsRepository();

        return $repository->findOneActive($form->id);
    }
}