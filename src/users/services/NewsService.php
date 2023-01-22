<?php

namespace users\services;

use common\components\services\AbstractServices;
use common\repositories\databases\NewsRepository;
use common\repositories\NewsRepositoryInterface;
use users\forms\NewsItemForm;

final class NewsService extends AbstractServices
{
    public function __construct(
        private readonly NewsRepositoryInterface $repositoryNews
    ) {

    }
    public function list(): array
    {
        $repository = $this->repositoryNews;

        return $repository->findAll();
    }

    public function item(NewsItemForm $form)
    {
        $repository = $this->repositoryNews;

        return $repository->findOneActive($form->id);
    }
}