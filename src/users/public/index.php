<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../../common/config/bootstrap.php';
require __DIR__ . '/../config/bootstrap.php';

$env = getenv('ENV');
if ($env !== 'prod') {
    $dotenv = \Dotenv\Dotenv::createUnsafeImmutable(
        dirname(__DIR__, 3),
        ['.env', '.env.local'],
        false
    );
    $dotenv->load();

    $env = getenv('ENV');
}

defined('YII_DEBUG') or define('YII_DEBUG', getenv('YII_DEBUG'));
defined('YII_ENV') or define('YII_ENV', getenv('ENV'));

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/main.php',
    require __DIR__ . '/../config/main.php'
);

(new yii\web\Application($config))->run();
