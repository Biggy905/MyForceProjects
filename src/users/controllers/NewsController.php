<?php

namespace users\controllers;

use common\components\ActiveController;
use common\components\Validator;
use common\repositories\databases\NewsRepository;
use common\repositories\NewsRepositoryInterface;
use users\forms\NewsItemForm;
use users\services\NewsService;
use yii\db\Exception;

final class NewsController extends ActiveController
{
    public function __construct(
        $id,
        $module,
        private readonly NewsService $serviceNews,
        private readonly NewsItemForm $formNewsItem,
        $config = []
    ) {
        parent::__construct($id, $module, $config);
    }

    public function actionList()
    {
        $service = $this->serviceNews->list();

        return $this->render('_list', compact('service'));
    }

    public function actionItem(string $id)
    {
        $form = $this->formNewsItem;
        $form->setAttributes(['id' => $id]);

        $validator = new Validator($form);
        if (!$validator->validate()) {
            throw new Exception('Not valid id!');
        }

        $item = $this->serviceNews->item($form);

        return $this->render('_item', compact('item'));
    }
}
